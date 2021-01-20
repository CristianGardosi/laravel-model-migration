<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Dove prendo i dati da DB? Dalla folder App dentro la quale si trova il file Car.php che estende la classe Model e si connette in automicatico al database Cars grazie alla feature singolare/plurale di Laravel
use App\Car;

class HomeController extends Controller
{
    public function index() {

        // Pick tutti i dati da tabella Cars
        $cars = Car::all();
        dump($cars);
        // Ritorno vista home + elementi portati da DB tramite la compact della variabile $cars
        return view('home', compact('cars'));
    }
}
