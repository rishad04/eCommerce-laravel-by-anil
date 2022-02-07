<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $data = [
            [
                'name'=>'Mobile',
                'price'=>'2000',
                'category'=>'Cell Phone',
                'description'=>'LG Mobile',
                'gallery'=>'trys'
            ],
            [
                'name'=>'ac',
                'price'=>'2000',
                'category'=>'Electronic',
                'description'=>'LG Mobile',
                'gallery'=>'trys'
            ],
            [
                'name'=>'fridge',
                'price'=>'2000',
                'category'=>'Electronic',
                'description'=>'LG ',
                'gallery'=>'trys'
            ],
            [
                'name'=>'tv',
                'price'=>'2000',
                'category'=>'home',
                'description'=>'LG ',
                'gallery'=>'trys'
            ],
            [
                'name'=>'bike',
                'price'=>'2000',
                'category'=>'Vahicle',
                'description'=>'Wego',
                'gallery'=>'trys'
            ]
        ];

        DB::table('product')->insert($data);

    }
}
