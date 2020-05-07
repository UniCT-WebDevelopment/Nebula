<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $this->call(CategoryTableSeeder::class);
       
        $this->call(PlatformsTableSeeder::class);
        $this->call(DownloadsTableSeeder::class);
        $this->call(ProductsImagesSeeder::class);
        $this->call(SectionTableSeeder::class);
        $this->call(ProductsTableSeed::class);
   
        
    }
}
