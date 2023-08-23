@extends('layouts.main')

@section('title', 'home')

@section('main')
    <div class="container">
        <h1 class="mb-5">TRENI</h1>
        <div class="trains d-flex ">
            <table class="table table-success">
                <thead>
                    <tr>
                        <th scope="col">Azienda</th>
                        <th scope="col">Stazione di partenza</th>
                        <th scope="col">Stazione di Arrivo</th>
                        <th scope="col">Orario di partenza</th>
                        <th scope="col">Orario di arrivo</th>
                        <th scope="col">Codice Treno</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($trains as $train)
                        <tr>
                            <th scope="row">{{ $train->company }}</th>
                            <td>{{ $train->departure_station }}</td>
                            <td>{{ $train->arrival_station }}</td>
                            <td>{{ $train->departure_hours }}</td>
                            <td>{{ $train->arrival_hours }}</td>
                            <td>{{ $train->train_code }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

@endsection
