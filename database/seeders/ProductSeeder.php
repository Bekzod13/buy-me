<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Connect;
use App\Models\Image;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $api = "https://ecommerce-product-api1.p.rapidapi.com/data";
       
        $write = [
            [
                'brand' => 'apple',
                'category' => 'laptop',
                'product' => 'macbook',
            ],
            [
                'brand' => 'apple',
                'category' => 'smartphone',
                'product' => 'iphone'
            ],
            [
                'brand' => 'samsung',
                'category' => 'smartphone',
                'product' => 'galaxy S',
            ],
            [
                'brand' => 'samsung',
                'category' => 'smartphone',
                'product' => 'galaxy flip',
            ],
            [
                'brand' => 'samsung',
                'category' => 'smartphone',
                'product' => 'galaxy fold',
            ],
            [
                'brand' => 'xiaomi',
                'category' => 'smartphone',
                'product' => 'redmi phone',
            ],
            [
                'brand' => 'xiaomi',
                'category' => 'smartphone',
                'product' => 'xiaomi phone',
            ],
            [
                'brand' => 'samsung',
                'category' => 'tv',
                'product' => 'samsung tv',
            ],
            [
                'brand' => 'samsung',
                'category' => 'laptop',
                'product' => 'samsung laptop',
            ],
            [
                'brand' => 'lg',
                'category' => 'tv',
                'product' => 'lg tv'
            ],
            [
                'brand' => 'asus',
                'category' => 'accessory',
                'product' => 'asus keyboard',
            ],
            [
                'brand' => 'asus',
                'category' => 'accessory',
                'product' => 'asus mouse',
            ],
            [
                'brand' => 'asus',
                'category' => 'accessory',
                'product' => 'asus headset'
            ],
            [
                'brand' => 'asus',
                'category' => 'laptop',
                'product' => 'asus laptop'
            ],
            [
                'brand' => 'asus',
                'category' => 'pc',
                'product' => 'asus pc'
            ],
            [
                'brand' => 'razer',
                'category' => 'accessory',
                'product' => 'razer mouse'
            ],
            [
                'brand' => 'razer',
                'category' => 'accessory',
                'product' => 'razer headset'
            ],
            [
                'brand' => 'other',
                'category' => 'other',
                'product' => 'laptop holder'
            ],
            [
                'brand' => 'hp',
                'category' => 'laptop',
                'product' => 'hp laptop',
            ],
            [
                'brand' => 'dell',
                'category' => 'laptop',
                'product' => 'dell laptop',
            ],
            [
                'brand' => 'lenovo',
                'category' => 'laptop',
                'product' => 'lenovo laptop',
            ],
            [
                'brand' => 'nvidia',
                'category' => 'other',
                'product' => 'gpu',
            ],
            [
                'brand' => 'other',
                'category' => 'monitor',
                'product' => 'monitor',
            ],
            [
                'brand' => 'other',
                'category' => 'audio',
                'product' => 'speaker',
            ],
        ];

        $brands = [
            'apple' => 'https://1000logos.net/wp-content/uploads/2016/10/Apple-Logo-500x281.png',
            'samsung' => 'https://1000logos.net/wp-content/uploads/2017/06/Samsung-Logo-2-500x281.png',
            'asus' => 'https://1000logos.net/wp-content/uploads/2016/10/Asus-Logo-1995.png',
            'hp' => 'https://1000logos.net/wp-content/uploads/2017/02/HP-Logo-2012.png',
            'mi' => 'https://1000logos.net/wp-content/uploads/2021/08/Xiaomi-logo-500x281.png',
            'xiaomi' => 'https://1000logos.net/wp-content/uploads/2021/08/Xiaomi-logo-500x281.png',
            'lg' => 'https://1000logos.net/wp-content/uploads/2017/03/LG-Logo-500x281.png',
            'razer' => 'https://1000logos.net/wp-content/uploads/2019/09/Razer-logo-500x300.png',
            'dell' => 'https://1000logos.net/wp-content/uploads/2017/07/Dell-Logo-500x313.png',
            'other' => 'https://w7.pngwing.com/pngs/450/784/png-transparent-shopping-einkaufskorb-plastic-basket-others-miscellaneous-material-trade.png',
            'nvidia' => 'https://1000logos.net/wp-content/uploads/2022/02/NVIDIA_logo.png',
            'lenovo' => 'https://1000logos.net/wp-content/uploads/2017/03/Lenovo-Logo-1-500x313.png',
        ];

        $categories = [
            'laptop' => 'https://www.seekpng.com/png/full/817-8176304_laptop-vector-png.png',
            'smartphone' => 'https://e7.pngegg.com/pngimages/380/768/png-clipart-iphone-telephone-logo-smartphone-iphone-electronics-text.png',
            'accessory' => 'https://i.pinimg.com/originals/58/15/63/58156313fb776bdda8b86fe602fbd695.png',
            'tv' => 'https://clipartcraft.com/images/logo-tv.png',
            'pc' => 'https://i.pinimg.com/originals/41/a4/05/41a405caa503067ce3718bd325f25a3e.png',
            'other' => 'https://w7.pngwing.com/pngs/450/784/png-transparent-shopping-einkaufskorb-plastic-basket-others-miscellaneous-material-trade.png',
            'monitor' => 'https://w7.pngwing.com/pngs/283/327/png-transparent-flat-screen-computer-monitor-illustration-computer-monitor-logo-monitor-electronics-text-rectangle.png',
            'audio' => 'https://bengoa.info/wp-content/uploads/2021/02/AUDIO1.png',
        ];

        $tags = [
            'new' => 'https://gastrofests.com/wp-content/uploads/2020/04/alisveris.jpg',
            '30%' => 'https://static.onecms.io/wp-content/uploads/sites/19/2019/02/11/GettyImages-769800477-2000.jpg',
            '10%' => 'https://woman.forumdaily.com/wp-content/uploads/2018/12/shutterstock_517388650.jpg',
            '50%' => 'https://2008php.com/09_Website_appreciate/10-08-09/1281367596qPbIc1TboG.jpg',
        ];

        $tagnames = [
            'new',
            '30%',
            '10%',
            '50%',
        ];

        foreach ($write as $item) {
            $params = [
                'product' => $item['product'],
            ];

            $data = Http::withHeaders([
                'X-RapidAPI-Key'=> '35074dc8b3msh03cd9ba1f4b88e3p1d8194jsn00d6744c99b0',
                'X-RapidAPI-Host'=> 'ecommerce-product-api1.p.rapidapi.com'
                ])
                ->get($api, $params)->json();
            foreach ($data as $d) {
                $brand = Brand::firstOrCreate([
                    'name' => $item['brand'],
                ],[
                    'name' => $item['brand'],
                    'annotation' => fake()->sentence(5),
                ]);
                Image::firstOrCreate(
                    [
                        'url' => $brands[$item['brand']],
                    ],[
                    'url' => $brands[$item['brand']],
                    'imageble_id' => $brand->id,
                    'imageble_type' => 'brand'
                ]);
                $category = Category::firstOrCreate([
                    'name' => $item['category'],
                ]);
                Image::firstOrCreate(
                    [
                        'url' => $categories[$item['category']],
                    ],[
                    'url' => $categories[$item['category']],
                    'imageble_id' => $category->id,
                    'imageble_type' => 'category'
                ]);
                $tag = Tag::firstOrCreate([
                    'name' => $tagnames[rand(0, count($tagnames) - 1)],
                ]);
                Image::firstOrCreate(
                    [
                        'url' => $tags[$tag->name],
                    ],[
                    'url' => $tags[$tag->name],
                    'imageble_id' => $tag->id,
                    'imageble_type' => 'tag'
                ]);
                
                $description = fake()->sentence(5);
                if(isset($d['description'])){
                    $description = $d['description'][0];
                }
                $title = ucfirst($brand->name) . " " . fake()->firstName();
                if(isset($d['title'])){
                    $title = $d['title'];
                }
                $price = round(str_replace(',', '', str_replace("₹", "", $d['price'])) * 0.012);
                $product = Product::create([
                    'brand_id' => $brand->id,
                    'name' =>  $title,
                    'price' => $price, 
                    'annotation' => $description,
                ]);
                Connect::firstOrCreate([
                    'connectable_id' => $tag->id,
                    'connectable_type' => 'tag',
                    'connect_id' => $category->id,
                    'connect_type' => 'category',
                ]);
                DB::table('connects')->insert([
                    'connectable_id' => $product->id,
                    'connectable_type' => 'product',
                    'connect_id' => $category->id,
                    'connect_type' => 'category',
                ]);
                DB::table('connects')->insert([
                    'connectable_id' => $product->id,
                    'connectable_type' => 'product',
                    'connect_id' => $tag->id,
                    'connect_type' => 'tag',
                ]);
                for ($i=0; $i < rand(1, 4); $i++) { 
                    DB::table('images')->insert([
                        'url' => $d['image'],
                        'imageble_id' => $product->id,
                        'imageble_type' => 'product'
                    ]);
                }
            }
        }

    }
}
