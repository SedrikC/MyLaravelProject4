<?php

use Faker\Generator as Faker;


    $factory->define(App\Veranstaltung::class, function (Faker $faker) {
        return [
            'id' => rand(0,100),
            'name' => $faker->word,
            'ort' => $faker->city,
            'datum' => $faker->date(),
            'Mensch' => $faker->name,
        ];
});
