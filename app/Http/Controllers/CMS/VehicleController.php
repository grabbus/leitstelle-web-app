<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();

        return view('cms.vehicles.index', compact('vehicles'));
    }

    public function create()
    {
        return view('cms.vehicles.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'call_sign' => ['required', 'max:255'],
            'type' => 'required', 'max:10',
            'type_long' => 'required', 'max:50',
            'equipment_manpower' => ['nullable', 'integer', 'size:9'],
            'equipment_water' => ['nullable', 'integer', 'size:12000'],
            'equipment_scba' => ['nullable', 'integer', 'size:20']
        ]);



        return redirect(route('vehicles.index'));
    }

    public function show(Vehicle $vehicle)
    {
        return view('cms.vehicles.show', compact('vehicle'));
    }

    public function update(Request $request, Vehicle $vehicle)
    {
        request()->validate([

        ]);

        return redirect(route('vehicles.index'));
    }

    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();

        return redirect(route('vehicles.index'));
    }
}
