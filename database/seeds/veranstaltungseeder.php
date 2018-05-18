<?php

use Illuminate\Database\Seeder;

class veranstaltungseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::insert("INSERT into veranstaltungen values (1, 'Grillen', 'Konstanz', NOW(), 'Sedrik', NOW(), NOW())");
    }
}
