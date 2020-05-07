<?php

use Illuminate\Database\Seeder;
use App\Download;
class DownloadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Download::insert([
            [
               // 'name' => 'Deus Ex', 
                'link' => 'downloads\deus.exe'],
            [//'name' => 'Diablo', 
                'link' => 'downloads\diablo.exe'],
            [//'name' => 'Thief', 
                'link' => 'downloads\thief.exe'],
            [//'name' => 'Doom', 
                'link' => 'downloads\doom.exe'],
            [//'name' => 'Monkey Island', 
                'link' => 'downloads\monkey.exe'],
            [//'name' => 'Neverwinter', 
                'link' => 'downloads\nwn.exe'],
            [//'name' => 'Grim Fandango', 
                'link' => 'downloads\Fandango.exe'],
            [//'name' => 'No Mans Sy', 
                'link' => 'downloads\nms.exe'],
            [//'name' => 'System Shock', 
                'link' => 'downloads\ss.exe'],
            [//'name' => 'System Shock 2', 
                'link' => 'downloads\ss_2.exe'],
            [//'name' => 'The Witcher', 
                'link' => 'downloads\witcher.exe'],
            [//'name' => 'The Witcher 2', 
                'link' => 'downloads\witcher2.exe'],
            [//'name' => 'Warcraft', 
                'link' => 'downloads\warcraft.exe'],
            [//'name' => 'Planescape Torment', 
                'link' => 'downloads\torment.exe'],
        ]);
    }
}
