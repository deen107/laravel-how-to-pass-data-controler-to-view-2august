<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car; //importing carmodel

class CarSeeder extends Seeder
{
    // property

    //constructor

    // method
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Elequont ORM
        Car::create([
            'brand_name' => 'Toyota'
        ]);
    }
}
