<?php
use Carbon\Carbon;
use App\Platform;
use Illuminate\Database\Seeder;

class PlatformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Platform::insert([
            ['name' => 'Windows', 'slug' => 'windows', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Linux', 'slug' => 'linux', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'MacOS', 'slug' => 'macos', 'created_at' => $now, 'updated_at' => $now],
           ]);
    }
}
