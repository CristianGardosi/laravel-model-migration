@extends('layouts.main')

@section('content')

    <h2>
        Cars list con metodo full backend
    </h2>
    <ul class="car-list">
        @foreach ($cars as $car)
        <li>
            <h3>
                {{ $car->modello }}
            </h3>
            <h3>
                {{ $car->marca }}
            </h3>
            <p>
                {{ $car->targa }}
            </p>
        </li>
        @endforeach
    </ul>

    <h2>
        Bikes list con metodo frontend (API + AXIOS + VUE)
    </h2>
    {{-- id app per inizializzazione Vue --}}
    <ul id="app" class="bike-list">
        <li v-for="bike in bikes">
            {{-- Il @ iniziale serve per far capire a BLADE che questa è una porzione di codice in Javascript --}}
            <h3>
                @{{ bike.modello }}
            </h3>
            <h3>
                @{{ bike.marca }}
            </h3>
            <h4>
                @{{ bike.cilindrata }}
            </h4>
        </li>
    </ul>

@endsection
