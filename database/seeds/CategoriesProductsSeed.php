<?php

use Illuminate\Database\Seeder;

class CategoriesProductsSeed extends Seeder
{


public function run() {



    $faker = Faker\Factory::create();
for($i = 0; $i < 10; $i++) {
        App\Models\Categories_Products::create([

           'title' => $faker->name ,
        'slug' =>  $faker->slug,
        'lang' => 'en',
        'single_photo' =>  $faker->Image ,
        'body' => $faker->text(100),


             ]);    } 


    }



}
