<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\DashboardRequest;
use App\Models\Owner;
use App\Models\Station;
use App\Models\StationData;
use App\Models\WagonToData;
use App\Repositories\OperationTypeRepository;
use App\Repositories\OwnerRepository;
use App\Repositories\ParkRepository;
use App\Repositories\ReasonRepository;
use App\Repositories\StationDataRepository;
use App\Repositories\StationRepository;
use App\Repositories\WayRepository;
use App\Services\AuthService;
use App\Services\RoleService;
use App\Services\StationDataService;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    protected AuthService $authService;
    protected WayRepository $wayRepository;
    protected ParkRepository $parkRepository;
    protected OwnerRepository $ownerRepository;
    protected ReasonRepository $reasonRepository;
    protected StationRepository $stationRepository;
    protected StationDataService $stationDataService;
    protected StationDataRepository $stationDataRepository;
    protected OperationTypeRepository $operationTypeRepository;

    public function __construct(
        AuthService $authService,
        WayRepository $wayRepository,
        ParkRepository $parkRepository,
        OwnerRepository $ownerRepository,
        ReasonRepository $reasonRepository,
        StationRepository $stationRepository,
        StationDataService $stationDataService,
        StationDataRepository $stationDataRepository,
        OperationTypeRepository $operationTypeRepository
    ) {
        $this->authService = $authService;
        $this->wayRepository = $wayRepository;
        $this->parkRepository = $parkRepository;
        $this->ownerRepository = $ownerRepository;
        $this->reasonRepository = $reasonRepository;
        $this->stationRepository = $stationRepository;
        $this->stationDataService = $stationDataService;
        $this->stationDataRepository = $stationDataRepository;
        $this->operationTypeRepository = $operationTypeRepository;
    }

    public function index(DashboardRequest $request)
    {
        $requestedOwnerIds = $request->get(DashboardRequest::FIELD_OWNERS) ?? [];
        $requestedStationId  = (int) $request->get(DashboardRequest::FIELD_STATION);

        $station = $this->getStation($requestedStationId);
        $stations = Station::all();
        $stationData = $this->stationDataRepository->getByStation($station->id);

        $this->filterDataByOwners($stationData, $requestedOwnerIds);

        $waysByParks = $this->stationDataService->getWaysByParks($stationData);
        $wagonCount = $this->stationDataService->getStationWagonCount($stationData);

        $owners = $this->ownerRepository->get();

        return view('pages.dashboard', [
            'currentStation' => $station,
            'waysByParks' => $waysByParks,
            'wagonCount' => $wagonCount,
            'owners' => $owners,
            'requestedOwnerIds' => $requestedOwnerIds,
            'stations' => $stations
        ]);
    }

    public function operations(DashboardRequest $request)
    {
        $requestedStationId  = (int) $request->get(DashboardRequest::FIELD_STATION);

        $station = $this->getStation($requestedStationId);

        $stations = $this->stationRepository->getAll();
        $parks = $this->parkRepository->getAll();
        $ways = $this->wayRepository->getAll();

        $reasons = $this->reasonRepository->getAll();
        $operationTypes = $this->operationTypeRepository->getAll();


        return view('pages.operations', [
            'currentStation' => $station,
            'stations' => $stations,
            'reasons' => $reasons,
            'operationTypes' => $operationTypes,
            'parks' => $parks,
            'ways' => $ways
        ]);
    }

    public function analytics()
    {
        return view('pages.analytics');
    }


    protected function filterDataByOwners(Collection $stationData, array $ownerIds): Collection
    {
        if (!$ownerIds) {
            return $stationData;
        }

        foreach ($stationData as $datum) {
            foreach ($datum->wagonsToData as $key => $wagonToData) {
                $ownerId = $wagonToData->wagon->owner->id;
                if (!in_array($ownerId, $ownerIds)) {
                    $datum->wagonsToData->forget($key);
                }
            }
        }

        return $stationData;
    }

    protected function getStation(int $stationId = null): Station
    {
        if ($stationId) {
            return $this->stationRepository->getById($stationId);
        }

        $user = $this->authService->getAuthUser();

        return $user->hasRole(RoleService::ROLE_ADMIN)
            ? Station::first()
            : $this->stationRepository->getByRoles($user->getRoleNames());
    }
}
