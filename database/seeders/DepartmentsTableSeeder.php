<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'name'=>'Super Admin',
        ]);
        DB::table('departments')->insert([
            'name'=>'Software Development',
        ]);
        DB::table('departments')->insert([
            'name'=>'Business Development',
        ]);
        DB::table('departments')->insert([
            'name'=>'Hr Admin & Accounts',
        ]);
        DB::table('departments')->insert([
            'name'=>'Support & Implementation',
        ]);
    }
}
