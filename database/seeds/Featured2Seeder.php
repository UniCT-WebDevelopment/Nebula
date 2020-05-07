<?php

use Illuminate\Database\Seeder;
use App\FeaturedSales2;
class Featured2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FeaturedSales2::insert([
            ['product_id' => '8'],
            ['product_id' => '10'],
            ['product_id' => '3'],
            ['product_id' => '13'],
            ['product_id' => '14'],
            ]);
    }
}
