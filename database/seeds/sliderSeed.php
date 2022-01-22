<?php

use Illuminate\Database\Seeder;

class sliderSeed extends Seeder
{


public function run() {



    $faker = Faker\Factory::create();
for($i = 0; $i < 5; $i++) {
        App\Models\slider::create([

         'lang' =>'en',
        'single_photo' =>  $faker->Image ,
        'title' => $faker->name ,

             ]);    } 


    }



}
