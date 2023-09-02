<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    public function run(): void
    {
        $images = [
            'https://citywestshoppingcentre.com/app/uploads/2017/04/Woman-Shopping-Banner.jpg',
            'https://2008php.com/09_Website_appreciate/10-08-09/1281367596qPbIc1TboG.jpg',
            'https://divakids.ru/wp-content/uploads/2022/08/pokupka-odezhdy.jpg',
            'https://gastrofests.com/wp-content/uploads/2020/04/alisveris.jpg',
            'https://static.onecms.io/wp-content/uploads/sites/19/2019/02/11/GettyImages-769800477-2000.jpg',
            'https://woman.forumdaily.com/wp-content/uploads/2018/12/shutterstock_517388650.jpg',
        ];

        $types = [
            'slide',
            'banner',
        ];

        foreach ($images as $image) {
            $type = $types[rand(0,1)];
            $id = array_search($image, $images) + 1;

            $banner = Banner::create([
                'title' => fake()->sentence(2),
                'annotation' => fake()->sentence(10),
                'type' => $type,
            ]);

            DB::table('images')->insert([
                'url' => $image,
                'imageble_id' => $banner->id,
                'imageble_type' => 'banner'
            ]);
        }
    }
}
