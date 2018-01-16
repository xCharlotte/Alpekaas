<?php

use Illuminate\Database\Seeder;

class SafetySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('safety_values')->insert(['name' => 'absolutely not save',]);
      DB::table('safety_values')->insert(['name' => 'not save',]);
      DB::table('safety_values')->insert(['name' => 'semi save',]);
      DB::table('safety_values')->insert(['name' => 'save',]);
      DB::table('safety_values')->insert(['name' => 'absolutely save',]);
    }
}
