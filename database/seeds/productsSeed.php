<?php

use Illuminate\Database\Seeder;

class productsSeed extends Seeder
{


public function run() {



    $faker = Faker\Factory::create();
for($i = 0; $i < 10; $i++) {
        App\Models\Products::create([

        'name' =>  $faker->name ,
        'body' =>  $faker->text(100),
        'single_photo' => $faker->Image ,
      //  'photos_id' => rand(10,30),
        'component' => $faker->text(100),
        'Net_weight' => rand(100,300),
        'Note' =>  $faker->word,                                             
        'Packing_content' => $faker->text(100),
        'cat_id' => rand(10,30),
        'lang' => 'en',
        'slug' => $faker->slug


             ]);    } 


    }



}
