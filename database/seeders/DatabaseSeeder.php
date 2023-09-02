<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            BannerSeeder::class,
            ProductSeeder::class,
            PropertySeeder::class,
            HeaderSeeder::class,
            MainSeeder::class,
        ]);
    }
}
