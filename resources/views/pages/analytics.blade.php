@php
@endphp

@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Главная'])
    <div class="row mt-4">
        <div class="col-9 mb-lg-0 mb-4 pb-4 p-4">
            <div class="card z-index-2 h-100 m-3 p-3">
                <h3>Обработка составов станциями</h3>
                <p>Количество составов в месяц</p>
                <canvas id="myChart" width="400" height="200"></canvas>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="./assets/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx = document.getElementById("myChart");
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['2023-02','2023-03','2023-04','2023-05','2023-06','2023-07','2023-08','2023-09','2023-10','2023-11'],
                datasets: [{
                    data: [86,114,106,106,107,111,133,221,101,300],
                    label: "Новокузнецк-Северный",
                    borderColor: "#3e95cd",
                    fill: false
                }, {
                    data: [282,350,411,502,635,809,300,241,421,612],
                    label: "Томусинская",
                    borderColor: "#8e5ea2",
                    fill: false
                }, {
                    data: [168,170,178,190,115,241,102,103,201,90],
                    label: "Курегеш",
                    borderColor: "#3cba9f",
                    fill: false
                }
                ]
            },
            options: {
                title: {
                    display: true,
                    text: 'sadasdsadasd (in millions)'
                }
            }
        });
    </script>
@endpush
