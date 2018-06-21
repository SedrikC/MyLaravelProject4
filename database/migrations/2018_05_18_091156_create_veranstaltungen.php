<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeranstaltungen extends Migration
{

    public function up()
    {
        Schema::create('veranstaltungen', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('Name');
            $table->string('Ort');
            $table->string('Genre');
            $table->string('Veranstalter');
            $table->date('Datum')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('veranstaltungen');
    }
}
