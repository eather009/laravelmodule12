<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('locations')->insert([
            'name'=>'Dhaka',
            'division'=>'Dhaka',
        ]);

        DB::table('locations')->insert([
            'name'=>'Comilla',
            'division'=>'Chittagong',
        ]);

        DB::table('locations')->insert([
            'name'=>'Chittagong',
            'division'=>'Chittagong',
        ]);

        DB::table('locations')->insert([
            'name'=>'Cox\'s Bazar',
            'division'=>'Chittagong',
        ]);
    }
}
