<?php

use Illuminate\Database\Seeder;
use App\Anew;
class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Anew::insert([
            ['product_id' => '7'],
            ['product_id' => '10'],
            ['product_id' => '11'],
            ]);
    }
}
