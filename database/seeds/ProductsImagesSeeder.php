<?php

use App\Images;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ProductsImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Images::insert([
            ['game' => 'Deus Ex', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/dx/1.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'Deus Ex', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/dx/2.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'Deus Ex', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/dx/3.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'Deus Ex', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/dx/4.jpg', 'created_at' => $now, 'updated_at' => $now],
            ]);

         Images::insert([
            ['game' => 'NeverWinter Nights', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/nwn/1.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'NeverWinter Nights', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/nwn/2.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'NeverWinter Nights', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/nwn/3.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'NeverWinter Nights', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/nwn/4.jpg', 'created_at' => $now, 'updated_at' => $now],                ]);    
            
        Images::insert([
            ['game' => 'Diablo', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/diablo/1.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'Diablo', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/diablo/2.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'Diablo', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/diablo/3.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'Diablo', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/diablo/4.jpg', 'created_at' => $now, 'updated_at' => $now],                ]);

        Images::insert([
            ['game' => 'Thief', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/thief/1.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'Thief', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/thief/2.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'Thief', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/thief/3.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'Thief', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/thief/4.jpg', 'created_at' => $now, 'updated_at' => $now],                ]);
                    
        Images::insert([
            ['game' => 'The Witcher', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/tw1/1.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'The Witcher', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/tw1/2.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'The Witcher', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/tw1/3.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'The Witcher', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/tw1/4.jpg', 'created_at' => $now, 'updated_at' => $now],                ]);
        
        Images::insert([
            ['game' => 'The Witcher 2', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/_tw2/1.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'The Witcher 2', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/_tw2/2.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'The Witcher 2', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/_tw2/3.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'The Witcher 2', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/_tw2/4.jpg', 'created_at' => $now, 'updated_at' => $now],                
        ]);
        Images::insert([
            ['game' => 'Warcraft', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/1warcraft/1.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'Warcraft', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/1warcraft/2.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'Warcraft', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/1warcraft/3.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'Warcraft', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/1warcraft/4.jpg', 'created_at' => $now, 'updated_at' => $now],                
        ]);
        Images::insert([
            ['game' => 'Grim Fandango', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/2grim/1.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'Grim Fandango', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/2grim/2.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'Grim Fandango', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/2grim/3.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'Grim Fandango', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/2grim/4.jpg', 'created_at' => $now, 'updated_at' => $now],                
        ]);
        Images::insert([
            ['game' => 'Monkey Island', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/3mi/1.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'Monkey Island', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/3mi/2.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'Monkey Island', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/3mi/3.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'Monkey Island', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/3mi/4.jpg', 'created_at' => $now, 'updated_at' => $now],                
        ]);
        Images::insert([
            ['game' => 'Doom', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/doom/1.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'Doom', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/doom/2.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'Doom', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/doom/3.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'Doom', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/doom/4.jpg', 'created_at' => $now, 'updated_at' => $now],                
        ]);
        Images::insert([
            ['game' => 'System Shock', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/ss/1.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'System Shock', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/ss/2.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'System Shock', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/ss/3.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'System Shock', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/ss/4.jpg', 'created_at' => $now, 'updated_at' => $now],                
        ]);
        Images::insert([
            ['game' => 'System Shock 2', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/ss2/1.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'System Shock 2', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/ss2/2.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'System Shock 2', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/ss2/3.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'System Shock 2', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/ss2/4.jpg', 'created_at' => $now, 'updated_at' => $now],                
        ]);

        Images::insert([
            ['game' => "No Man's Sky", 'link_image' => 'http://www.nebula.com:8012/storage/images/games/nms/1.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => "No Man's Sky", 'link_image' => 'http://www.nebula.com:8012/storage/images/games/nms/2.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => "No Man's Sky", 'link_image' => 'http://www.nebula.com:8012/storage/images/games/nms/3.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => "No Man's Sky", 'link_image' => 'http://www.nebula.com:8012/storage/images/games/nms/4.jpg', 'created_at' => $now, 'updated_at' => $now],                
        ]);
        Images::insert([
            ['game' => 'Planescape Torment', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/torment/1.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'Planescape Torment', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/torment/2.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'Planescape Torment', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/torment/3.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['game' => 'Planescape Torment', 'link_image' => 'http://www.nebula.com:8012/storage/images/games/torment/4.jpg', 'created_at' => $now, 'updated_at' => $now],
            ]);
        
    }
}
