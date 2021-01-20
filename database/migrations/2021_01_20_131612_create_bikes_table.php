<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        // CREAZIONE NUOVA TABELLA
        Schema::create('bikes', function (Blueprint $table) {
            $table->id();
            $table->string('modello', 30);
            $table->string('marca', 30);
            $table->string('cilindrata', 20);
            $table->string('descrizione', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bikes');
    }
}
