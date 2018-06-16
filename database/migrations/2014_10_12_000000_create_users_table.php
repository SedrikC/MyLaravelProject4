<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Auth;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
           //Auth::user()->name;
            $table->increments('id');
            $table->string('role_id')->default(1);
            //ROLE_ID = 1 => User
            //ROLE_ID = 2 => Admin
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
             $table->string('avatar')->nullable()->default('default.jpg');
            //ehemalig von der mein_profil migration
              $table->string('firstName')->default(' - ');
              $table->string('lastName')->default(' - ');
              $table->string('mobile')->default(' - ');
             $table->date('geburtsdatum')->nullable();
              $table->string('ort')->default(' - ');
              $table->string('geschlecht')->default(' - ');
              $table->string('strasse')->default(' - ');
              $table->string('plz')->default(' - ');

              $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
