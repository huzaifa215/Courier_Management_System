<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
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
            'name'=>'Huzaifa khalid',
            'email'=>'hu75495@gmail.com',
            'username'=>'admin',
            'password'=>'03004276264'//bcrypt('password')
        ]);

        // 2nd tabel
        DB::table('users')->insert([
            'role_id'=>2,
            'branch_id'=>2,
            'name'=>'hanzala khalid',
            'email'=>'hanzala75495@gmail.com',
            'username'=>'admin2',
            'password'=>'03004276264'
        ]);
}


}
