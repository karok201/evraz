<?php

namespace App\Http\Controllers;

use App\Models\Station;
use App\Models\StationData;
use App\Models\WagonToStation;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function index()
    {
        $authUser = Auth::user();

        $currentStation = Station::query()
            ->whereIn(Station::FIELD_ROLE, $authUser->getRoleNames())
            ->first();

        $stationData = StationData::query()
            ->where(StationData::FIELD_STATION_ID, $currentStation->id)
            ->get();

        $waysByParks = [];
        foreach ($stationData as $datum) {
            $waysByParks[$datum->park_id][$datum->way_id] = $datum->wagonsToData;
        }

        return view('pages.dashboard', [
            'currentStation' => $currentStation,
            'waysByParks' => $waysByParks
        ]);
    }
}
