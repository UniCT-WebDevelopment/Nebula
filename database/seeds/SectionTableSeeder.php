<?php


use Carbon\Carbon;
use App\Section;
use Illuminate\Database\Seeder;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Section::insert([
            ['name' => 'News', 'slug' => 'news', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Highlights', 'slug' => 'high', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Featured Sales 1', 'slug' => 'featured1', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Featured Sales 2', 'slug' => 'featured2', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Discover', 'slug' => 'discover', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Midweek', 'slug' => 'midweek', 'created_at' => $now, 'updated_at' => $now],
           ]);
    }
}
