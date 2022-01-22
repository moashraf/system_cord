<?php

use Illuminate\Database\Seeder;

class products_photos extends Seeder
{


public function run() {



    $faker = Faker\Factory::create();
for($i = 0; $i < 10; $i++) {
        App\Models\ProductsPhotos::create([

            'Product_id' => rand(10,30),
            'Photo' => $faker->Image  ,
            'lang' =>'en'  ,


             ]);    } 


    }



}
