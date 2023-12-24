@php
    use App\Models\Owner;
    use App\Models\Station;use Illuminate\Support\Collection;

/**
 * @var Station $currentStation
 * @var Collection $reasons
 * @var Collection $operationTypes
 * @var Collection $stations
 * @var Collection $parks
 * @var Collection $ways
 */
@endphp

@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Главная'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Станция</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $currentStation->name }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Создание новой операции</p>
                                    <button
                                        type="button"
                                        class="btn btn-sm btn-primary my-3 mx-auto"
                                        data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"
                                    >
                                        Добавить операцию
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content p-3">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Создание операции</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body ">
                                <form action="">
                                    <div class="row col-4 bg-gray-200 my-4 rounded-1">
                                        <div class="col-12 py-2">
                                            <label class="form-label">Дата окончания:</label>
                                            <input
                                                type="date"
                                                id="meeting-time"
                                                name="meeting-time"
                                                class="form-control"
                                            />
                                        </div>
                                        <div class="col-12 py-2">
                                            <label class="form-label">Дата окончания:</label>
                                            <input
                                                type="date"
                                                id="meeting-time"
                                                name="meeting-time"
                                                class="form-control"
                                            />
                                        </div>
                                    </div>
                                    <div class="row bg-gray-200 my-4 py-3 rounded-1">
                                        <div class="col-6">
                                            <label class="form-label">Операция:</label>
                                            <select
                                                name="operation_type"
                                                id=""
                                                class="form-select"
                                            >
                                                @foreach($operationTypes as $operationType)
                                                    <option value="{{ $operationType->id }}">
                                                        {{ $operationType->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Причина:</label>
                                            <select
                                                name="operation_reason"
                                                id=""
                                                class="form-select"
                                            >
                                                @foreach($reasons as $reason)
                                                    <option value="{{ $reason->id }}">
                                                        {{ $reason->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row my-3 py-3 bg-gray-200 rounded-1">
                                        <div class="row">
                                            <div class="col-3">
                                                <label class="form-label">Станция отправления:</label>
                                                <select name="" id="" class="form-select">
                                                    @foreach($stations as $station)
                                                        <option value="{{ $station->id }}">
                                                            {{ $station->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label class="form-label">Парк отправления:</label>
                                                <select name="" id="" class="form-select">
                                                    @foreach($parks as $park)
                                                        <option value="{{ $park->id }}">
                                                            {{ $park->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label class="form-label">Путь отправления:</label>
                                                <select name="" id="" class="form-select">
                                                    @foreach($ways as $way)
                                                        <option value="{{ $way->id }}">
                                                            {{ $way->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label class="form-label">Вагоны:</label>
                                                <select name="" id="" class="form-select">

                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-3">
                                                <label class="form-label">Станция назначения:</label>
                                                <select name="" id="" class="form-select">
                                                    @foreach($stations as $station)
                                                        <option value="{{ $station->id }}">
                                                            {{ $station->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label class="form-label">Парк назначения:</label>
                                                <select name="" id="" class="form-select">
                                                    @foreach($parks as $park)
                                                        <option value="{{ $park->id }}">
                                                            {{ $park->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label class="form-label">Путь назначения:</label>
                                                <select name="" id="" class="form-select">
                                                    @foreach($ways as $way)
                                                        <option value="{{ $way->id }}">
                                                            {{ $way->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label class="form-label">Направление подачи:</label>
                                                <select name="" id="" class="form-select">

                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row bg-gray-200 rounded-1 pt-2 pb-3">
                                        <div class="col-3">
                                            <div class="col-12">
                                                <label class="form-label">Локомотив №1</label>
                                                <input class="form-control" type="text">
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label">ФИО Машиниста</label>
                                                <input class="form-control" type="text" placeholder="Иванов И.И">
                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="col-12">
                                                <label class="form-label">Локомотив №1</label>
                                                <input class="form-control" type="text">
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label">ФИО Машиниста</label>
                                                <input class="form-control" type="text" placeholder="Иванов И.И">
                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="col-12">
                                                <label class="form-label">Локомотив №1</label>
                                                <input class="form-control" type="text">
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label">ФИО Машиниста</label>
                                                <input class="form-control" type="text" placeholder="Иванов И.И">
                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="col-12">
                                                <label class="form-label">Локомотив №1</label>
                                                <input class="form-control" type="text">
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label">ФИО Машиниста</label>
                                                <input class="form-control" type="text" placeholder="Иванов И.И">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                                <button type="button" class="btn btn-primary">Создать</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-9 mb-lg-0 mb-4 pb-4">
            <div class="card z-index-2 h-100 m-3">
                <div class="card-header pb-3 pt-3 bg-transparent">
                    <h3>Операции на станции</h3>
                </div>
                <div class="row container pb-3">
                    <div class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay">
                        <h5>Номер операции</h5>
                    </div>
                    <div class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay">
                        <h5>Операция</h5>
                    </div>
                    <div class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay">
                        <h5>№ лок-ва</h5>
                    </div>
                    <div class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay">
                        <h5>Откуда</h5>
                    </div>
                    <div class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay">
                        <h5>Куда</h5>
                    </div>
                </div>
                <div class="row container pb-3">
                    <div class="col-2">
                        <div class="d-flex px-2 py-1 align-items-center">
                            <div class=" ">
                                Операция №1
                            </div>
                            <div class="ms-4">
                            </div>
                        </div>
                    </div>
                    <div class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay">
                        <span>Перестановка вагона</span>
                    </div>
                    <div class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay">
                        <span>1522</span>
                    </div>
                    <div class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay">
                        <span>Новокузнецк</span>
                    </div>
                    <div class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay">
                        <span>Курегеш</span>
                    </div>
                </div>
                <hr>
                <div class="row container pb-3">
                    <div class="col-2">
                        <div class="d-flex px-2 py-1 align-items-center">
                            <div class=" ">
                                Операция №2
                            </div>
                            <div class="ms-4">
                            </div>
                        </div>
                    </div>
                    <div class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay">
                        <span>Перестановка вагона</span>
                    </div>
                    <div class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay">
                        <span>1540</span>
                    </div>
                    <div class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay">
                        <span>Новокузнецк</span>
                    </div>
                    <div class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay">
                        <span>Курегеш</span>
                    </div>
                </div>
                <hr>
                <div class="row container pb-3">
                    <div class="col-2">
                        <div class="d-flex px-2 py-1 align-items-center">
                            <div class=" ">
                                Операция №3
                            </div>
                            <div class="ms-4">
                            </div>
                        </div>
                    </div>
                    <div class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay">
                        <span>Перестановка вагона</span>
                    </div>
                    <div class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay">
                        <span>421</span>
                    </div>
                    <div class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay">
                        <span>Ханты-Мансийск</span>
                    </div>
                    <div class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay">
                        <span>Сыктывкар</span>
                    </div>
                </div>
                <hr>
                <div class="row container pb-3">
                    <div class="col-2">
                        <div class="d-flex px-2 py-1 align-items-center">
                            <div class=" ">
                                Операция №4
                            </div>
                            <div class="ms-4">
                            </div>
                        </div>
                    </div>
                    <div class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay">
                        <span>Перестановка вагона</span>
                    </div>
                    <div class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay">
                        <span>321</span>
                    </div>
                    <div class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay">
                        <span>Курегеш</span>
                    </div>
                    <div class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay">
                        <span>Ханты-Мансийск</span>
                    </div>
                </div>
                <hr>
                <div class="row container pb-3">
                    <div class="col-2">
                        <div class="d-flex px-2 py-1 align-items-center">
                            <div class=" ">
                                Операция №5
                            </div>
                            <div class="ms-4">
                            </div>
                        </div>
                    </div>
                    <div class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay">
                        <span>Перестановка вагона</span>
                    </div>
                    <div class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay">
                        <span>5212</span>
                    </div>
                    <div class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay">
                        <span>Сыктывкар</span>
                    </div>
                    <div class="pt-1 mt-1 col-2 mx-1 text-center rounded-3 overlay">
                        <span>Якутск</span>
                    </div>
                </div>
            </div>
        </div>
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
