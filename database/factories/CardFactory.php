<?php

use Faker\Generator as Faker;

$factory->define(App\Card::class, function (Faker $faker) {
   return [
         'title' => $faker->name,
         'description' => $faker->word,
     ];
});
