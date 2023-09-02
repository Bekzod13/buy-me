<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    public function run(): void
    {
        $properties = [
            'OS system',
            'RAM',
            'Display',
            'GPU',
            'Memory',
            'Weight',
        ];
        $osses = [
            'Windows 10',
            'Windows 11',
            'IOS 16',
            'IOS 17',
            'Kali',
            'Mint',
            'Ubuntu',
            'Fedora',
            'Android'
        ];
        $rams = [
            '4 GB',
            '6 GB',
            '8 GB',
            '12 GB',
            '16 GB',
            '24 GB',
            '32 GB'
        ];
        $displays = [
            '768 x 360',
            '915 x 412',
            '1360 x 768',
            '1920 x 1080',
            '1080 x 810',
        ];
        $memories = [
            '128 GB',
            '256 GB',
            '512 GB',
            '1 TB',
            '2 TB'
        ];
        $weights = [
            '100 gr',
            '150 gr',
            '300 gr',
            '1050 gr',
            '600 gr'  
        ];
        foreach ($properties as $property) {
            if($property == 'OS system'){
                $value = $osses;
            }elseif($property == 'RAM'){
                $value = $rams;
            }elseif($property == 'Display'){
                $value = $displays;
            }elseif($property == 'Memory'){
                $value = $memories;
            }elseif($property == 'Weight'){
                $value = $weights;
            }elseif($property == 'GPU'){
                $value = $rams;
            }
            foreach ($value as $v) {
                \App\Models\Property::create([
                    'name' => $property,
                    'value' => $v,
                ]);
            }
        }

        foreach ($properties as $property) {
            if($property == 'OS system'){
                $value = $osses;
            }elseif($property == 'RAM'){
                $value = $rams;
            }elseif($property == 'Display'){
                $value = $displays;
            }elseif($property == 'Memory'){
                $value = $memories;
            }elseif($property == 'Weight'){
                $value = $weights;
            }elseif($property == 'GPU'){
                $value = $rams;
            }
            $ids = \App\Models\Property::where('name', $property)->get()->toArray();
            $products =  \App\Models\Product::all();
            foreach ($products as $product) {
                DB::table('connects')->insert([
                    'connectable_id' => $product->id,
                    'connectable_type' => 'product',
                    'connect_id' => $ids[rand(1, (count($ids) - 1))]['id'],
                    'connect_type' => 'property',
                ]);
            }
        }
    }
}
