@extends('layouts.defaultLayout')
@section('content')
    <div class="container">
        <h1 class="page-title">Tabellone Treni</h1>
        <div class="row g-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Compagnia</th>
                        <th scope="col">Stazione di partenza</th>
                        <th scope="col">Stazione di arrivo </th>
                        <th scope="col text-center">orario</th>
                        <th scope="col">Codice treno</th>
                        <th scope="col">N° vagoni</th>
                        <th scope="col">In orario</th>
                        <th scope="col">Cancellato</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                        <x-card>
                            <x-slot:company>
                                {{ $train->company }}
                            </x-slot:company>
                            <x-slot:departureStation>
                                {{ $train->departure_station }}
                            </x-slot:departureStation>
                            <x-slot:arrivalStation>
                                {{ $train->arrival_station }}
                            </x-slot:arrivalStation>
                            <x-slot:departureTime>
                                {{ $train->departure_time }}
                            </x-slot:departureTime>
                            <x-slot:arrivalTime>
                                {{ $train->arrival_time }}
                            </x-slot:arrivalTime>
                            <x-slot:trainCode>
                                {{ $train->train_code }}
                            </x-slot:trainCode>
                            <x-slot:totalCarriages>
                                {{ $train->total_carriages }}
                            </x-slot:totalCarriages>
                            <x-slot:onTime>
                                {{ $train->on_time ? 'si' : 'no' }}
                            </x-slot:onTime>
                            <x-slot:cancelled>
                                {{ $train->cancelled ? 'si' : 'no' }}
                            </x-slot:cancelled>
                        </x-card>
                    @endforeach

                </tbody>
        </div>
    </div>
    </div>
@endsection
