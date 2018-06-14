<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyProfile extends Migration
{

    public function up()
    {
        Schema::create('MyProfile', function (Blueprint $table) {
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
    public function down()
    {
        Schema::dropIfExists('MyProfile');
    }
}
