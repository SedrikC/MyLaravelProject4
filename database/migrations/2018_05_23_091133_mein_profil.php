<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MeinProfil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('mein_profil', function (Blueprint $table) {
        $table->increments('id')->unique();
        $table->string('firstName');
        $table->string('lastName');
        $table->string('mobile');
        $table->string('email');
        $table->date('geburtsdatum');
        $table->string('ort');
        $table->string('geschlecht');
        $table->string('strasse');
        $table->string('plz');
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
        Schema::dropIfExists('mein_profil');
    }
}
