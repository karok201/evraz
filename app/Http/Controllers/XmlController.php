<?php

namespace App\Http\Controllers;

use App\Exports\StationExport;
use App\Http\Requests\XmlRequest;
use App\Repositories\StationRepository;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class XmlController extends Controller
{
    protected StationRepository $stationRepository;

    public function __construct(StationRepository $stationRepository)
    {
        $this->stationRepository = $stationRepository;
    }

    public function getStationXml(XmlRequest $request)
    {
        $stationId = $request->get(XmlRequest::FIELD_STATION_ID);

        return Excel::download(new StationExport, 'stations.xlsx');
    }
}
