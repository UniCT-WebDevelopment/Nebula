<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Deus Ex',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris leo, euismod a ipsum ac, 
                dapibus dignissim nunc. In hac habitasse platea dictumst. Donec efficitur lectus eu nisl sodales, 
                vel porttitor nulla vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                Nullam egestas dui vel dolor mattis faucibus. Nam eleifend est nec ex eleifend molestie. 
                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                Morbi urna enim, pellentesque non lorem et, posuere sodales mi. Ut quis finibus nisi.
                Proin ut vehicula nunc. Mauris dapibus, augue eget feugiat efficitur, nisl eros gravida metus, 
                quis hendrerit mi dui a tellus. Donec gravida urna sed ante varius facilisis. ',
            'price' => '19.99',
            'requisites' => 'System:
            Windows XP or Vista
            Processor:
            1 GHz
            Memory:
            256 MB RAM
            Graphics:
            3D graphics card compatible with DirectX 9',
        //    'image' => 'http://www.nebula.com:8012/storage/images/dx.jpg'

        ])->categories()->attach(1);

        $product = Product::find(1);

        $product->categories()->attach(2);

        $product->platforms()->attach(1);
        $product->platforms()->attach(2);
        
      
        
        
        $product->sections()->attach(2);
        $product->sections()->attach(5);

        Product::create([
            'name' => 'Planescape:Torment',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris leo, euismod a ipsum ac, 
                dapibus dignissim nunc. In hac habitasse platea dictumst. Donec efficitur lectus eu nisl sodales, 
                vel porttitor nulla vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                Nullam egestas dui vel dolor mattis faucibus. Nam eleifend est nec ex eleifend molestie. 
                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                Morbi urna enim, pellentesque non lorem et, posuere sodales mi. Ut quis finibus nisi.
                Proin ut vehicula nunc. Mauris dapibus, augue eget feugiat efficitur, nisl eros gravida metus, 
                quis hendrerit mi dui a tellus. Donec gravida urna sed ante varius facilisis. ',
            'price' => '14.99',
            'requisites' => 'System:
            Windows XP or Vista
            Processor:
            1 GHz
            Memory:
            256 MB RAM
            Graphics:
            3D graphics card compatible with DirectX 9',
        //    'image' => 'http://www.nebula.com:8012/storage/images/torment.jpg'

        ])->categories()->attach(1);

        $product = Product::find(2);

        $product->platforms()->attach(1);
        $product->platforms()->attach(2);
        $product->platforms()->attach(3);

        
        

      

        $product->sections()->attach(2);
        $product->sections()->attach(3);
        $product->sections()->attach(5);
        $product->sections()->attach(6);

        Product::create([
            'name' => 'Diablo',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris leo, euismod a ipsum ac, 
                dapibus dignissim nunc. In hac habitasse platea dictumst. Donec efficitur lectus eu nisl sodales, 
                vel porttitor nulla vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                Nullam egestas dui vel dolor mattis faucibus. Nam eleifend est nec ex eleifend molestie. 
                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                Morbi urna enim, pellentesque non lorem et, posuere sodales mi. Ut quis finibus nisi.
                Proin ut vehicula nunc. Mauris dapibus, augue eget feugiat efficitur, nisl eros gravida metus, 
                quis hendrerit mi dui a tellus. Donec gravida urna sed ante varius facilisis. ',
            'price' => '8.99',
            'requisites' => 'System:
            Windows XP or Vista
            Processor:
            1 GHz
            Memory:
            256 MB RAM
            Graphics:
            3D graphics card compatible with DirectX 9',
         //   'image' => 'http://www.nebula.com:8012/storage/images/diablo.jpg'

        ])->categories()->attach(1);

        $product = Product::find(3);

        $product->categories()->attach(2);

        $product->platforms()->attach(1);  

        

        

        $product->sections()->attach(2);
        $product->sections()->attach(4);
        $product->sections()->attach(5);

        Product::create([
            'name' => 'Thief',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris leo, euismod a ipsum ac, 
                dapibus dignissim nunc. In hac habitasse platea dictumst. Donec efficitur lectus eu nisl sodales, 
                vel porttitor nulla vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                Nullam egestas dui vel dolor mattis faucibus. Nam eleifend est nec ex eleifend molestie. 
                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                Morbi urna enim, pellentesque non lorem et, posuere sodales mi. Ut quis finibus nisi.
                Proin ut vehicula nunc. Mauris dapibus, augue eget feugiat efficitur, nisl eros gravida metus, 
                quis hendrerit mi dui a tellus. Donec gravida urna sed ante varius facilisis. ',
            'price' => '14.99',
            'requisites' => 'System:
            Windows XP or Vista
            Processor:
            1 GHz
            Memory:
            256 MB RAM
            Graphics:
            3D graphics card compatible with DirectX 9',
         //   'image' => 'http://www.nebula.com:8012/storage/images/thief.jpg'

        ])->categories()->attach(2);

        $product = Product::find(4);

        
     
      
        $product->categories()->attach(5);

        $product->platforms()->attach(1);
        $product->platforms()->attach(2);
        
       

        $product->sections()->attach(2);
        $product->sections()->attach(3);
        $product->sections()->attach(4);

        Product::create([
            'name' => 'Neverwinter:Nights',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris leo, euismod a ipsum ac, 
                dapibus dignissim nunc. In hac habitasse platea dictumst. Donec efficitur lectus eu nisl sodales, 
                vel porttitor nulla vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                Nullam egestas dui vel dolor mattis faucibus. Nam eleifend est nec ex eleifend molestie. 
                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                Morbi urna enim, pellentesque non lorem et, posuere sodales mi. Ut quis finibus nisi.
                Proin ut vehicula nunc. Mauris dapibus, augue eget feugiat efficitur, nisl eros gravida metus, 
                quis hendrerit mi dui a tellus. Donec gravida urna sed ante varius facilisis. ',
            'price' => '14.99',
            'requisites' => 'System:
            Windows XP or Vista
            Processor:
            1 GHz
            Memory:
            256 MB RAM
            Graphics:
            3D graphics card compatible with DirectX 9',
       //     'image' => 'http://www.nebula.com:8012/storage/images/nwn.jpg'

        ])->categories()->attach(1);
        
        $product = Product::find(5);

        $product->platforms()->attach(1);
       
       
      

        $product->sections()->attach(3);

        Product::create([
            'name' => 'The Witcher',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris leo, euismod a ipsum ac, 
                dapibus dignissim nunc. In hac habitasse platea dictumst. Donec efficitur lectus eu nisl sodales, 
                vel porttitor nulla vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                Nullam egestas dui vel dolor mattis faucibus. Nam eleifend est nec ex eleifend molestie. 
                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                Morbi urna enim, pellentesque non lorem et, posuere sodales mi. Ut quis finibus nisi.
                Proin ut vehicula nunc. Mauris dapibus, augue eget feugiat efficitur, nisl eros gravida metus, 
                quis hendrerit mi dui a tellus. Donec gravida urna sed ante varius facilisis. ',
            'price' => '14.99',
            'requisites' => 'System:
            Windows XP or Vista
            Processor:
            1 GHz
            Memory:
            256 MB RAM
            Graphics:
            3D graphics card compatible with DirectX 9',
        //    'image' => 'http://www.nebula.com:8012/storage/images/tw1.jpg'

        ])->categories()->attach(1);
        
        $product = Product::find(6);

        $product->categories()->attach(2);
        
       
        $product->platforms()->attach(1);
        $product->platforms()->attach(2);
        $product->platforms()->attach(3);

       

        Product::create([
            'name' => 'The Witcher 2 ',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris leo, euismod a ipsum ac, 
                dapibus dignissim nunc. In hac habitasse platea dictumst. Donec efficitur lectus eu nisl sodales, 
                vel porttitor nulla vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                Nullam egestas dui vel dolor mattis faucibus. Nam eleifend est nec ex eleifend molestie. 
                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                Morbi urna enim, pellentesque non lorem et, posuere sodales mi. Ut quis finibus nisi.
                Proin ut vehicula nunc. Mauris dapibus, augue eget feugiat efficitur, nisl eros gravida metus, 
                quis hendrerit mi dui a tellus. Donec gravida urna sed ante varius facilisis. ',
            'price' => '29.99',
            'requisites' => 'System:
            Windows XP or Vista
            Processor:
            1 GHz
            Memory:
            256 MB RAM
            Graphics:
            3D graphics card compatible with DirectX 9',
        //    'image' => 'http://www.nebula.com:8012/storage/images/games/_tw2/1.jpg'

        ])->categories()->attach(1);
        $product = Product::find(7);
        $product->categories()->attach(2);

        $product->platforms()->attach(1);
        $product->platforms()->attach(2);
        $product->platforms()->attach(3);

       
        

        
        $product->sections()->attach(1);
        $product->sections()->attach(4);
        $product->sections()->attach(6);
        Product::create([
            'name' => 'Warcraft ',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris leo, euismod a ipsum ac, 
                dapibus dignissim nunc. In hac habitasse platea dictumst. Donec efficitur lectus eu nisl sodales, 
                vel porttitor nulla vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                Nullam egestas dui vel dolor mattis faucibus. Nam eleifend est nec ex eleifend molestie. 
                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                Morbi urna enim, pellentesque non lorem et, posuere sodales mi. Ut quis finibus nisi.
                Proin ut vehicula nunc. Mauris dapibus, augue eget feugiat efficitur, nisl eros gravida metus, 
                quis hendrerit mi dui a tellus. Donec gravida urna sed ante varius facilisis. ',
            'price' => '9.99',
            'requisites' => 'System:
            Windows XP or Vista
            Processor:
            1 GHz
            Memory:
            256 MB RAM
            Graphics:
            3D graphics card compatible with DirectX 9',
       //     'image' => 'http://www.nebula.com:8012/storage/images/games/1warcraft/1.jpg'

        ])->categories()->attach(6);
        $product = Product::find(8);

        $product->platforms()->attach(1);

        
        
    
        $product->sections()->attach(4);
        Product::create([
            'name' => 'Grim Fandango ',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris leo, euismod a ipsum ac, 
                dapibus dignissim nunc. In hac habitasse platea dictumst. Donec efficitur lectus eu nisl sodales, 
                vel porttitor nulla vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                Nullam egestas dui vel dolor mattis faucibus. Nam eleifend est nec ex eleifend molestie. 
                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                Morbi urna enim, pellentesque non lorem et, posuere sodales mi. Ut quis finibus nisi.
                Proin ut vehicula nunc. Mauris dapibus, augue eget feugiat efficitur, nisl eros gravida metus, 
                quis hendrerit mi dui a tellus. Donec gravida urna sed ante varius facilisis. ',
            'price' => '19.99',
            'requisites' => 'System:
            Windows XP or Vista
            Processor:
            1 GHz
            Memory:
            256 MB RAM
            Graphics:
            3D graphics card compatible with DirectX 9',
       //     'image' => 'http://www.nebula.com:8012/storage/images/games/2grim/1.jpg'

        ])->categories()->attach(3);
        $product = Product::find(9);

        $product->platforms()->attach(1);
        $product->platforms()->attach(2);

        
       
        
        $product->sections()->attach(3);
        Product::create([
            'name' => 'Monkey Island ',
           // 'platform' => 'Windows',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris leo, euismod a ipsum ac, 
                dapibus dignissim nunc. In hac habitasse platea dictumst. Donec efficitur lectus eu nisl sodales, 
                vel porttitor nulla vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                Nullam egestas dui vel dolor mattis faucibus. Nam eleifend est nec ex eleifend molestie. 
                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                Morbi urna enim, pellentesque non lorem et, posuere sodales mi. Ut quis finibus nisi.
                Proin ut vehicula nunc. Mauris dapibus, augue eget feugiat efficitur, nisl eros gravida metus, 
                quis hendrerit mi dui a tellus. Donec gravida urna sed ante varius facilisis. ',
            'price' => '9.99',
            'requisites' => 'System:
            Windows XP or Vista
            Processor:
            1 GHz
            Memory:
            256 MB RAM
            Graphics:
            3D graphics card compatible with DirectX 9',
        //    'image' => 'http://www.nebula.com:8012/storage/images/games/3mi/1.jpg'

        ])->categories()->attach(3);
        $product = Product::find(10);

        $product->platforms()->attach(1);
        $product->platforms()->attach(2);

        
       
        $product->images()->attach(33);
        $product->images()->attach(34);
        $product->images()->attach(35);
        $product->images()->attach(36);

        $product->sections()->attach(1);
        $product->sections()->attach(4);
        $product->sections()->attach(6);

        Product::create([
            'name' => 'Doom ',
         //   'platform' => 'Windows',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris leo, euismod a ipsum ac, 
                dapibus dignissim nunc. In hac habitasse platea dictumst. Donec efficitur lectus eu nisl sodales, 
                vel porttitor nulla vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                Nullam egestas dui vel dolor mattis faucibus. Nam eleifend est nec ex eleifend molestie. 
                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                Morbi urna enim, pellentesque non lorem et, posuere sodales mi. Ut quis finibus nisi.
                Proin ut vehicula nunc. Mauris dapibus, augue eget feugiat efficitur, nisl eros gravida metus, 
                quis hendrerit mi dui a tellus. Donec gravida urna sed ante varius facilisis. ',
            'price' => '9.99',
            'requisites' => 'System:
            Windows XP or Vista
            Processor:
            1 GHz
            Memory:
            256 MB RAM
            Graphics:
            3D graphics card compatible with DirectX 9',
        //    'image' => 'http://www.nebula.com:8012/storage/images/games/doom/1.jpg'

        ])->categories()->attach(7);
        $product = Product::find(11);

        $product->platforms()->attach(1);
        


       
        
        $product->sections()->attach(1);
        $product->sections()->attach(5);
        Product::create([
            'name' => 'System Shock ',
         //   'platform' => 'Windows',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris leo, euismod a ipsum ac, 
                dapibus dignissim nunc. In hac habitasse platea dictumst. Donec efficitur lectus eu nisl sodales, 
                vel porttitor nulla vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                Nullam egestas dui vel dolor mattis faucibus. Nam eleifend est nec ex eleifend molestie. 
                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                Morbi urna enim, pellentesque non lorem et, posuere sodales mi. Ut quis finibus nisi.
                Proin ut vehicula nunc. Mauris dapibus, augue eget feugiat efficitur, nisl eros gravida metus, 
                quis hendrerit mi dui a tellus. Donec gravida urna sed ante varius facilisis. ',
            'price' => '9.99',
            'requisites' => 'System:
            Windows XP or Vista
            Processor:
            1 GHz
            Memory:
            256 MB RAM
            Graphics:
            3D graphics card compatible with DirectX 9',
        //    'image' => 'http://www.nebula.com:8012/storage/images/games/ss/1.jpg'

        ])->categories()->attach(1);
        $product = Product::find(12);
        $product->categories()->attach(2);

        $product->platforms()->attach(1);
        $product->platforms()->attach(2);

       

        
        $product->sections()->attach(5);
        Product::create([
            'name' => 'System Shock 2',
          //  'platform' => 'Windows',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris leo, euismod a ipsum ac, 
                dapibus dignissim nunc. In hac habitasse platea dictumst. Donec efficitur lectus eu nisl sodales, 
                vel porttitor nulla vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                Nullam egestas dui vel dolor mattis faucibus. Nam eleifend est nec ex eleifend molestie. 
                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                Morbi urna enim, pellentesque non lorem et, posuere sodales mi. Ut quis finibus nisi.
                Proin ut vehicula nunc. Mauris dapibus, augue eget feugiat efficitur, nisl eros gravida metus, 
                quis hendrerit mi dui a tellus. Donec gravida urna sed ante varius facilisis. ',
            'price' => '9.99',
            'requisites' => 'System:
            Windows XP or Vista
            Processor:
            1 GHz
            Memory:
            256 MB RAM
            Graphics:
            3D graphics card compatible with DirectX 9',
        //    'image' => 'http://www.nebula.com:8012/storage/images/games/ss2/1.jpg'

        ])->categories()->attach(1);
        $product = Product::find(13);
        $product->categories()->attach(2);

        $product->platforms()->attach(1);
        $product->platforms()->attach(2);

        

        
        $product->sections()->attach(6);
        Product::create([
            'name' => "No Man's Sky",
          //  'platform' => 'Windows',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris leo, euismod a ipsum ac, 
                dapibus dignissim nunc. In hac habitasse platea dictumst. Donec efficitur lectus eu nisl sodales, 
                vel porttitor nulla vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                Nullam egestas dui vel dolor mattis faucibus. Nam eleifend est nec ex eleifend molestie. 
                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                Morbi urna enim, pellentesque non lorem et, posuere sodales mi. Ut quis finibus nisi.
                Proin ut vehicula nunc. Mauris dapibus, augue eget feugiat efficitur, nisl eros gravida metus, 
                quis hendrerit mi dui a tellus. Donec gravida urna sed ante varius facilisis. ',
            'price' => '9.99',
            'requisites' => 'System:
            Windows XP or Vista
            Processor:
            1 GHz
            Memory:
            256 MB RAM
            Graphics:
            3D graphics card compatible with DirectX 9',
            'image' => "[]"

        ])->categories()->attach(2);
        $product = Product::find(14);
        $product->categories()->attach(3);

        $product->platforms()->attach(1);
        
        
      
      
       

        $product->sections()->attach(6);
        $product->sections()->attach(5);
    }
}
