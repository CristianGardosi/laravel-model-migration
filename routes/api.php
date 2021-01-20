<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Ho collocato il mio controller all'interno di una cartella chiamata Api in modo da tenere separati i controller relativi a rotte destinate a API quindi per accedervi devo prima di tutto indicare esplicitamente il nome del suddetto namespace con la seguente sintassi
Route::namespace('Api')->group(function() {
    Route::get('/bikes', 'BikeController@index');
});