<?php

use Illuminate\Database\Seeder;

class veranstaltungseeder extends Seeder
{
    public function run()
    {
        DB::insert("INSERT INTO veranstaltungen VALUES (1,'Grillen', 'Sedrik',NOW(),NOW())");
    }
}