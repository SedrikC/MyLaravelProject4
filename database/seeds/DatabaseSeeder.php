<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'id' =>1,
            'role_id'=>2,
            'name' => 'Dominik1810',
            'email' => 'dominik.al.burkert@gmail.com',
            'password' => bcrypt('derder'),
            'avatar' => NULL,
            'firstName' => 'Dominik',
            'lastName' => 'Burkert',
            'mobile' => '0124553952',
            'geburtsdatum' => NULL,
            'ort' => 'Spaichingen',
            'geschlecht' => 'male',
            'strasse' => 'Auf Michelfeld 7',
            'plz' => 78549,
            'created_at' => NOW(),
            'updated_at' => NOW(),


        ]);
        DB::table('users')->insert([
            'id' =>2,
            'role_id'=>2,
            'name' => 'Sedrik17',
            'email' => 'sedrik.cirzel@gmail.com',
            'password' => bcrypt('passwort'),
            'avatar' =>NULL,
            'firstName' => 'Sedrik',
            'lastName' => 'Cirzel',
            'mobile' => '110',
            'geburtsdatum' => NULL,
            'ort' => 'Spaichingen',
            'geschlecht' => 'male',
            'strasse' => 'Kastanienweg 17',
            'plz' => 78549,
            'created_at' => NOW(),
            'updated_at' => NOW(),


        ]);
        DB::table('users')->insert([
            'id' =>3,
            'role_id'=>2,
            'name' => 'M.Eigelsperger',
            'email' => 'markus.eigelsperger@htwg-konstanz.de',
            'password' => bcrypt('admin'),
            'avatar' =>NULL,
            'firstName' => 'Markus',
            'lastName' => 'Eigelsperger',
            'mobile' => '110',
            'geburtsdatum' => NULL,
            'ort' => 'Konstanz',
            'geschlecht' => 'male',
            'strasse' => 'Rheingutstrasse',
            'plz' => 78546,
            'created_at' => NOW(),
            'updated_at' => NOW(),


        ]);

    //  DB::insert("INSERT INTO users VALUES(1,2, 'Dominik Burkert', 'dominik.al.burkert@gmail.com',bcrypt('secret'),NOW(),NOW())");
    }
}
