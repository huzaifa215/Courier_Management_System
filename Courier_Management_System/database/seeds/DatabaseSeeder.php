<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        // Call the seeder class here a dami data base to run it

        //this measn ye class call=bolai ge the useseeder class ko jis ke 2nd attribute me bataya he keh ye class he
           // $this->call(Userseeder::class);
           $this->call(UserSeeder::class);
            $this->call(RoleSeeder::class);


    }
}
