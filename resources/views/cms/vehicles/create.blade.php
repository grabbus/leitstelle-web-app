@extends('layout')

@section('content')
    <div class="container">
        <div class="mb-3">
            <h3 class="mb-3">Neues Fahrzeug erstellen</h3>
            <a class="btn btn-outline-primary"
                href="{{ route('cms.vehicles.index') }}">
                Zurück
            </a>
        </div>

        <form method="POST" action="{{ route('cms.vehicles.store') }}">
            @csrf
            @include('cms.vehicles.form')

            <button type="submit"
                    class="btn btn-primary"
            >
                Speichern
            </button>
        </form>
    </div>
@endsection
