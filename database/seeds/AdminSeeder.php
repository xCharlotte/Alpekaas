<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Admin::create(array(
        'name' => ('Charlotte Voskuilen'),
        'email' => ('charlotte@gmail.com'),
        'password' => bcrypt('qwerty'),
      ));
    }
}
