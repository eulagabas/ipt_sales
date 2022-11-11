<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MerchandiseSeeder extends Seeder
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
                'product_name'=> 'Cheese',
                'brand_name'=> 'Eden',
                'retail_price'=> '20',
                'wholesale_price'=> '15',
                'wholesale_qty'=> '5',
                'qty_stock'=> '200',
                'unit_id'=>'3',
                'category_id'=>'1',
            ],

            [
                'product_name'=> 'Toothpaste',
                'brand_name'=> 'Unique',
                'retail_price'=> '30',
                'wholesale_price'=> '25',
                'wholesale_qty'=> '6',
                'qty_stock'=> '300',
                'unit_id'=>'3',
                'category_id'=>'3',  
            ],

            [
                'product_name'=> 'Bottled Juice',
                'brand_name'=> 'C2',
                'retail_price'=> '15',
                'wholesale_price'=> '10',
                'wholesale_qty'=> '6',
                'qty_stock'=> '200',
                'unit_id'=>'3',
                'category_id'=>'1',
            ],

            [
                'product_name'=> 'Laundry Detergent',
                'brand_name'=> 'Tide',
                'retail_price'=> '18',
                'wholesale_price'=> '12',
                'wholesale_qty'=> '10',
                'qty_stock'=> '400',
                'unit_id'=>'3',
                'category_id'=>'2',
            ]
        ];
        foreach($data as $merchandises){
            \App\Models\Merchandise::create($merchandises);
        }

    }
    }
