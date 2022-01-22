<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(productsSeed::class);
        // $this->call(CategoriesProductsSeed::class);
      //   $this->call(sliderSeed::class); 
$this->call(UserSeed::class); 
       //  $this->call(products_photos::class); 
      //  $this->call(siteStingsSeed::class); 

}}
