<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB; // DB is a class
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    // property

    // constructor


    // method-function

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //wwe need to create records in the animals table
        // scope resolution operator ClassName::member
        //ClassName::property
// -> member seletion operator
        //ClassName::method()
// query builder
        DB::table('animals')->insert(
            [
                [
                'name' => 'cow',
                'created_at' =>DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' =>DB::raw('CURRENT_TIMESTAMP')
                ],
                [
                'name' => 'dog',
                'created_at' =>DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' =>DB::raw('CURRENT_TIMESTAMP')
                ],
                [
                'name' => 'horse',
                'created_at' =>DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' =>DB::raw('CURRENT_TIMESTAMP')
                ]
            ]);
        
    }
}
