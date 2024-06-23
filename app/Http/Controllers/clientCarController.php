<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class clientCarController extends Controller
{
    public function index()
    {
        $cars = Car::where('status', '=', 'available')->get();
        return view('cars.cars', compact('cars'));
    }
}
