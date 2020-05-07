<?php
use Carbon\Carbon;
use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'RPG', 'slug' => 'rpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Action', 'slug' => 'action', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Adventure', 'slug' => 'adventure', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Driving', 'slug' => 'driving', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Stealth', 'slug' => 'stealth', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'RTS', 'slug' => 'rts', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Shooter', 'slug' => 'shooter', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
