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
      DB::table('cards')->insert([
          'title' => ('Samenwerking'),
          'description' => ('hoi'),
      ]);
    }
  }
