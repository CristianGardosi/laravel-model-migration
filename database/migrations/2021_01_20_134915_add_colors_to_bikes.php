<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColorsToBikes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        // AGGIUNTA COLONNA A TABELLA CREATA BIKES ED INSERITA NEL PUNTO DA ME SCELTO
        Schema::table('bikes', function (Blueprint $table) {
            $table->string('colors', 50)->after('descrizione');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bikes', function (Blueprint $table) {
            //
        });
    }
}
