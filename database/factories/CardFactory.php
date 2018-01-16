<?php

use Faker\Generator as Faker;

$factory->define(App\Card::class, function (Faker $faker) {
   return [
         'title' => $faker->word,
         'description' => $faker->text,
     ];
});
