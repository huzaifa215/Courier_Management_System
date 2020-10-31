<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class Usersedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1st table

        DB::table('users')->insert([
            'role_id'=>1,
            'branch_id'=>1,
            'name'=>'Huzaifa khaldi',
            'email'=>'hu75495@gmail.com',
            'username'=>'admin',
            'password'=>bcrypt('password'),
        ]);

        // 2nd tabel
        DB::table('users')->insert([
            'role_id'=>2,
            'branch_id'=>2,
            'name'=>'hanzala khaldi',
            'email'=>'hanzala75495@gmail.com',
            'username'=>'admin2',
            'password'=>bcrypt('password'),
        ]);
    }
}
