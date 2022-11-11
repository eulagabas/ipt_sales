<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
                'category'=>'Foods',
                'description'=>'This stand for food category'
            ],

            [
                'category'=>'Detergent',
                'description'=>'This stand for detergent category'
            ],

            [
                'category'=>'Necessity',
                'description'=>'This stand for necessity category'
            ],

            [
                'category'=>'Drinks',
                'description'=>'This stand for drinks category'
            ]
            
        ];

        foreach($data as $categories){
            \App\Models\Category::create($categories);
        }
    }
}
