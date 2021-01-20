@extends('layouts.main')

@section('content')
    <h2>
        Cars list con metodo full backend
    </h2>
    <ul>
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
@endsection
