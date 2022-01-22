<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{


public function run() {




$faker = Faker\Factory::create();

    for($i = 0; $i < 5; $i++) {
        App\User::create([
        'name' =>   'corddigital'  ,
        'email' =>  'a.ragaie@corddigital.com' ,
        'password' => bcrypt("FHDHdgsg$$%%436346"),
         ]);
    }




    }



}
