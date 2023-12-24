@php
use App\Models\Owner;
use App\Models\Station;

/**
 * @var Station $currentStation
 * @var array $waysByParks
 * @var int $wagonCount
 * @var Owner[] $owners
 * @var int[] $requestedOwnerIds
 * @var Station[] $stations
 */
@endphp

@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Главная'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Станция</p>
                                    @role('admin')
                                        <form action="{{ route('home') }}" method="GET">
                                            @csrf
                                            <select name="station" class="form-select my-2">
                                                @foreach($stations as $station)
                                                    <option
                                                        value="{{ $station->id }}"
                                                        {{ $station->id == $currentStation->id ? 'selected' : '' }}
                                                    >
                                                        {{ $station->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <button type="submit" class="btn btn-sm btn-primary my">Переключить</button>
                                        </form>
                                    @else
                                        <h5 class="font-weight-bolder">
                                            {{ $currentStation->name }}
                                        </h5>
                                    @endrole
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Вагонов на станции</p>
                                    <h3 class="font-weight-bolder">
                                        {{ $wagonCount }} шт.
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card h-100">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Excel станции</p>
                                    <a href="{{ route('station.xml', ['station_id' => $currentStation->id]) }}" class="btn btn-primary mt-3">
                                        Скачать Excel
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-8 mb-lg-0 mb-4 pb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <h4 class="text-capitalize">Фильтрация</h4>
                    </div>
                    <form action="{{ route('home') }}" method="GET">
                        @csrf
                        <div class="row container form-container mt-3">
                            <h6>По владельцам</h6>
                            @foreach($owners as $owner)
                                <div class="col-2 m-1 py-1 px-2 rounded-3" style="background-color:  {{ $owner->color }};">
                                    <input
                                        type="checkbox"
                                        name="owners[]"
                                        value="{{ $owner->id }}"class="input-group-static text-center mt-1"
                                        {{ in_array($owner->id, $requestedOwnerIds) ? 'checked' : '' }}
                                    >
                                    <span class="text-black">{{ $owner->name }}</span>
                                </div>
                            @endforeach
                            <button type="submit" class="btn btn-lg btn-primary my-3">Применить</button>

                            <h6>Поиск по вагонам:</h6>
                            <div class="form-outline" data-mdb-input-init>
                                <input type="search" id="form1" class="form-control" placeholder="Type query" aria-label="Search" />
                            </div>
                            <button type="submit" class="btn btn-lg btn-primary my-3">Поиск</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @foreach($waysByParks as $parkId => $wagonsByWays)
            @include('components.park', ['wagonsByWays' => $wagonsByWays, 'parkId' => $parkId])
        @endforeach
        @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('js')
    <script src="./assets/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(251, 99, 64, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(251, 99, 64, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(251, 99, 64, 0)');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#fb6340",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
@endpush
