<?php

use Illuminate\Database\Seeder;
use App\Midweek;
class MidweekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Midweek::insert([
            ['product_id' => '2'],
            ['product_id' => '11'],
            ['product_id' => '10'],
            ['product_id' => '7'],
            ]);
    }
}
