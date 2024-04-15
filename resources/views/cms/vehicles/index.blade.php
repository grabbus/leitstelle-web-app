@extends('layout')

@section('content')
    <div class="container">
        <div>
            <h3 class="mb-3">Fahrzeugübersicht</h3>
        </div>


        <div class="mb-4">
            <a class="btn btn-success"
                href="{{ route('cms.vehicles.create') }}">
                Eintrag hinzufügen
            </a>
        </div>

        <table class="table table-striped">
            <thead class="table-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Organisation</th>
                <th scope="col">Funkrufname</th>
                <th scope="col">Typ</th>
                <th scope="col">Aktion</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            @empty($vehicles)
                @foreach($vehicles as $vehicle)
                    <tr>
                        <th scope="row">{{ $vehicle->id }}</th>
                        <td>{{ $vehicle->organisation }}</td>
                        <td>{{ $vehicle->call_sign }}</td>
                        <td>{{ $vehicle->type }}</td>
                        <td>
                            Actions
                        </td>
                    </tr>
                @endforeach
            @else
                <tr class="text-center">
                    <td colspan="5">Noch keine Einträge...</td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
@endsection
