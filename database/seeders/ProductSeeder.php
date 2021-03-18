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
        DB::table('_products')->insert(
            [
              
                [
                    'name'=>'oppo',
                    'price'=>'$300',
                    'category'=>'mobile',
                    'description'=>'A smart phone with 8GB Ram and much more features',
                    'gallery'=>'https://www.lg.com/in/mobile-phones/lg-lmg910emw-aurora-silver',
                ],
                [
                    'name'=>'LG',
                    'price'=>'$200',
                    'category'=>'mobile',
                    'description'=>'A smart phone with 4GB Ram and much more features',
                    'gallery'=>'https://www.lg.com/in/mobile-phones/lg-lmg910emw-aurora-silver',
                ],
                [
                    'name'=>'LG',
                    'price'=>'$200',
                    'category'=>'mobile',
                    'description'=>'A smart phone with 4GB Ram and much more features',
                    'gallery'=>'https://www.lg.com/in/mobile-phones/lg-lmg910emw-aurora-silver',
                ],
                [
                    'name'=>'LG',
                    'price'=>'$200',
                    'category'=>'mobile',
                    'description'=>'A smart phone with 4GB Ram and much more features',
                    'gallery'=>'https://www.lg.com/in/mobile-phones/lg-lmg910emw-aurora-silver',
                ]
                
            ]
        );
    }
}
