<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bike;

class BikeController extends Controller
{
    
    public function index() {

        $bikes = Bike::all();
        // Ritornare dati in formato JSON 
        return response()->json($bikes);
    }

}

// URL = http://127.0.0.1:8000/api/bikes
