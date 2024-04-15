@extends('layout')

@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Alarm</h5>
                        <a href="{{ route('monitor.alarm') }}" class="btn btn-outline-primary">Go to Alarm</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Status</h5>
                        <a href="{{ route('monitor.status') }}" class="btn btn-outline-primary">Go to Status</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('monitor.test') }}" class="btn btn-outline-primary">Go to Test</a>
@endsection
