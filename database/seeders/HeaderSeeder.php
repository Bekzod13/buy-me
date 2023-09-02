<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Header;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeaderSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::take(3)->get();
        foreach ($categories as $item) {
            Header::create([
                'headerable_id' => $item->id,
                'headerable_type' => 'category',	
                'color' => '#fff',	
                'symbol' => '',	
            ]);
        }
        $tags = Tag::take(1)->get();
        foreach ($tags as $item) {
            Header::create([
                'headerable_id' => $item->id,
                'headerable_type' => 'tag',	
                'color' => '#f00',	
                'symbol' => '*',	
            ]);
        }
    }
}
