<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('buses')->insert([
            'name'=>'Hanif',
            'plate_number'=>'Dhaka Ga',
            'model'=>'0001',
        ]);

        DB::table('buses')->insert([
            'name'=>'Ena',
            'plate_number'=>'Dhaka Mo',
            'model'=>'0000',
        ]);
    }
}
