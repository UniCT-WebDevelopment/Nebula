<?php

use Illuminate\Database\Seeder;
use App\FeaturedSales1;
class Featured1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FeaturedSales1::insert([
            ['product_id' => '4'],
            ['product_id' => '2'],
            ['product_id' => '7'],
            ['product_id' => '6'],
            ['product_id' => '2'],
            ]);
    }
}
