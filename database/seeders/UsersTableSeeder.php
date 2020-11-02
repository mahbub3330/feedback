<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'role_id'=>'1',
            'name'=>'skylark',
            'department'=>'Super Admin',
            'email'=>'skylark@skylarksoft.com',
            'phone'=>'09678375375',
            'password'=>bcrypt('12345678')
        ]);

        DB::table('users')->insert([
            'role_id'=>'2',
            'name'=>'Mahbub Alam',
            'department'=>'Software Engineer',
            'email'=>'mahbub@skylarksoft.com',
            'phone'=>'01770995078',
            'password'=>bcrypt('mahbub3330')
        ]);
    }
}
