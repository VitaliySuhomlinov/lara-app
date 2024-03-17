<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Cars\Save as SaveRequest;
use App\Models\Car; 

class Cars extends Controller
{
    public function index()
    {
        $cars = Car::orderByDesc('created_at')->get();
        return view('cars.index', ['cars' => $cars]);
    }

    public function create()
    {
        $transmissions = config('app-cars.transmissions');
        return view('cars.create', ['transmissions' => $transmissions]);
    }

    public function store(SaveRequest $request)
    {
        $car = Car::create($request->validated());
        return redirect()->route('cars.show', [$car->id]);
    }

    public function show(string $id)
    {
        $car = Car::findOrfail($id);
        $transmissions = config('app-cars.transmissions');
        
        return view('cars.show', [
            'car'           => $car,
            'transmissions' => $transmissions
        ]);
    }

    public function edit(string $id)
    {
        $car = Car::findOrfail($id);
        $transmissions = config('app-cars.transmissions');
        return view('cars.edit', [
            'car' => $car,
            'transmissions' => $transmissions
        ]);
    }

    public function update(SaveRequest $request, Car $car)
    {
        $car->update($request->validated());
        return redirect()->route('cars.show', [$car->id]);
    }

    public function destroy(string $id)
    {
        $car = Car::findOrfail($id);
        $car->delete();
        return redirect("/cars");
    }
}
