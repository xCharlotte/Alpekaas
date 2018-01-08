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
      # Call the seperate seeders in this file
      $this->call(SafetySeeder::class);
      $this->call(AdminSeeder::class);
    }
  }
