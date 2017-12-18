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
<<<<<<< HEAD
        //
=======
        // $this->call(UsersTableSeeder::class);
        DB::table('safety_values')->insert([
          'anonymous' => ('1,2'),
          'showName' => ('3,4,5'),
        ]);
>>>>>>> refs/remotes/origin/develop
    }
}
