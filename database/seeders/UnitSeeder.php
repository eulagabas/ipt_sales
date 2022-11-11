<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'unit_type'=>'milligrams',
                'description'=> "This stands as the milligram unit"
            ],
           
            [
                'unit_type'=>'kilograms',
                'description'=> "This stands as the kilogram unit"
            ],

            [
                'unit_type'=>'grams',
                'description'=> "This stands as the gram unit"
            ]
        ];

        foreach($data as $units){
            \App\Models\Unit::create($units);
        }
    }
}
