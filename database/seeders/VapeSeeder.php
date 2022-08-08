<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Vape;
use Illuminate\Database\Seeder;

class VapeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vapes = [
            [
                'brand' => 'Aegis Boost',
                'type' => 'Pod',
                'color' => 'Gun Metal',
                'price' => '1250'
            ],
            [
                'brand' => 'Aegis Solo',
                'type' => 'Mod/Box',
                'color' => 'Black',
                'price' => '2500'
            ],
            [
                'brand' => 'GeekVape Legend 2',
                'type' => 'Mod/Box',
                'color' => 'Rainbow',
                'price' => '3800'
            ],
            [
                'brand' => 'Aegis X',
                'type' => 'Mod/Box',
                'color' => 'Rainbow',
                'price' => '4500'
            ],
           

        ];

        foreach($vapes as $b){
            Vape::create($b);
        }
    }
}