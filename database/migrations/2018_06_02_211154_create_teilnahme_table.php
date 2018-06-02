<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeilnahmeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teilnahme', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('VeranstaltungsID');
            $table->string('name');
            $table->integer('antwort'); //0 bei Teilnahme 1 bei Absage
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teilnahmes');
    }
}
