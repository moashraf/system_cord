<?php

use Faker\Generator as Faker;
use App\Models\types_en;
use App\Models\types_ar;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});







////////////////////////////////////////////////////////////////////////////////////////////////




$factory->define(App\Models\NEWS::class, function (Faker $faker) {
 
    return [
        'single_photo' => 'logo.jpg',
        'icon' => 'logo.jpg',
      ];
}); 

$factory->define(App\Models\News_en::class, function (Faker $faker) {
     return [
	        'id_news_ar' =>function(){
			return factory('App\Models\NEWS'  )->create()->id;
		},
        'title' => $faker->name,
         'description' => $faker->paragraph, 
        'slug' =>  $faker->name,
     ];
}); 


$factory->define(App\Models\News_ar::class, function (Faker $faker) {
     return [
	        'id_news_ar' =>function(){
			return factory('App\Models\NEWS'  )->create()->id;
		},
        'title' => $faker->name,
         'description' => $faker->paragraph, 
        'slug' =>  $faker->name,
     ];
}); 



////////////////////////////////////////////////////////////////////////////////////////////////








$factory->define(App\Models\services::class, function (Faker $faker) {
 
    return [
        'image' => 'logo.jpg',
        'icon' => 'logo.jpg',
        'status' => '1' ,
     ];
}); 

$factory->define(App\Models\services_en::class, function (Faker $faker) {
     return [
	        'id_services' =>function(){
			return factory('App\Models\services'  )->create()->id;
		},
        'title' => $faker->name,
         'description' => $faker->paragraph, 
        'slug' =>  $faker->name,
     ];
}); 


$factory->define(App\Models\services_ar::class, function (Faker $faker) {
     return [
	        'id_services' =>function(){
			return factory('App\Models\services'  )->create()->id;
		},
        'title' => $faker->name,
         'description' => $faker->paragraph, 
        'slug' =>  $faker->name,
     ];
}); 

////////////////////////////////////////////////////////////////////////////////////////////////





$factory->define(App\Models\types::class, function (Faker $faker) {
    
    return [
         'single_photo' => 'logo.jpg',
        'email'=>  $faker->email,                    
        'phone'=>  $faker->phone, 
     ];
}); 



 $Products = types_en::orderByRaw("RAND()")->limit(1)->get();
  
 
 foreach ($Products as  $value) {
   echo($value->id);

   
}




$factory->define(App\Models\types_en::class, function (Faker $faker) {
     return [
	 
	  'job_title' => $faker->name,
        'status' => '1' ,
      //  'title' => $faker->name,
		  'description' => $faker->paragraph, 
		'id_types' => $faker->name,
		'slug' => $faker->name,
		
     ];
}); 


$factory->define(App\Models\types_ar::class, function (Faker $faker) {
     return [
	        'id_services' =>function(){
			return factory('App\Models\services'  )->create()->id;
		},
       // 'title' => $faker->name,
         'description' => $faker->paragraph, 
        'slug' =>  $faker->name,
     ];
}); 


 
////////////////////////////////////////////////////////////////////////////////////////////////



 


$factory->define(App\Models\clients::class, function (Faker $faker) {
 
    return [
        'single_photo' => 'logo.jpg',
        'icon' => 'logo.jpg',
      ];
}); 

$factory->define(App\Models\clients_en::class, function (Faker $faker) {
     return [
	
	        'id_clients' =>  '1',
        'title' => $faker->name,
         'description' => $faker->paragraph, 
      ];
}); 

$factory->define(App\Models\clients_ar::class, function (Faker $faker) {
     return [
	
	        'id_clients' =>  '1',
        'title' => $faker->name,
         'description' => $faker->paragraph, 
      ];
}); 


////////////////////////////////////////////////////////////////////////////////////////////////




