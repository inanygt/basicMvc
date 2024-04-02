<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarType;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }
    
    public function create()
    {
        $cartypes = CarType::all();
        return view('cars.create', compact('cartypes'));
    }
    
    public function store(Request $request)
    {
        $car = new Car();
        $car->make = $request->make;
        $car->model = $request->model;
        $car->year = $request->year;
        $car->car_type_id = $request->car_type_id;
        $car->save();
    
        return redirect()->route('cars.index');
    }
    
    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }
    
    public function update(Request $request, Car $car)
    {
        $car->make = $request->make;
        $car->model = $request->model;
        $car->save();
    
        return redirect()->route('cars.index');
    }
    
    public function destroy(Car $car)
    {
        $car->delete();
    
        return redirect()->route('cars.index');
    }
}
