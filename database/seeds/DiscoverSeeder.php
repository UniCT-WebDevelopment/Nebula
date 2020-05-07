<?php

use Illuminate\Database\Seeder;
use App\Discover;
class DiscoverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Discover::insert([
            ['product_id' => '1'],
            ['product_id' => '2'],
            ['product_id' => '3'],
            ['product_id' => '4'],
            ]);
    }
}
