<?php

namespace Database\Seeders;

use App\Models\Main;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainSeeder extends Seeder
{
    public function run(): void
    {
        $mainList = [
            [
                'order' => 1,
                'type' => 'slider',
                'content' => 'banner',
            ],
            [
                'order' => 2,
                'type' => 'brand_list',
                'content' => 'brands',
            ],
            [
                'order' => 3,
                'type' => 'banner',
                'content' => 'banner',
                'with' => 1,
            ],
            [
                'order' => 4,
                'type' => 'product_list',
                'content' => 'category',
                'with' => 'laptop',
            ],
            [
                'order' => 5,
                'type' => 'category_list',
                'content' => 'category',
            ],
            [
                'order' => 6,
                'type' => 'banner',
                'content' => 'banner',
                'with' => 2,
            ],
            [
                'order' => 7,
                'type' => 'product_list',
                'content' => 'tag',
                'with' => 'new',
            ],
            [
                'order' => 8,
                'type' => 'banner',
                'content' => 'banner',
                'with' => 3,
            ],
            [
                'order' => 9,
                'type' => 'product_list',
                'content' => 'category',
                'with' => 'smartphone',
            ],
        ];

        foreach ($mainList as $main) {
            $data = [];
            $data['order'] = $main['order'];
            $data['type'] = $main['type'];
            $data['content'] = $main['content'];
            if(isset($main['with'])){
                $data['with'] = $main['with'];
            }
            Main::create($data);
        }
    }
}
