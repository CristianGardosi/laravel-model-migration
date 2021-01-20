<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Car extends Model
{
    // Non devo specificare di dover cercare dentro la tabella Cars del DB  car-shop poichè la feature singolare/plurale di Laravel in questo caso fa tutto per me essendo il nome della tabella Cars ed il nome della classe Car

    // Sintax per specificare 
    // protected $table = 'nome tabella';
}
