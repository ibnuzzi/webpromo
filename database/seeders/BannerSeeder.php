<?php

namespace Database\Seeders;

use App\Models\banners;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tablebanner = [
            'banner1' => 'mentahandiskon.png',
            'banner2' => 'mentahandiskon.png',
            'banner3' => 'mentahandiskon.png'
        ];
        banners::insert($tablebanner);
    }
}
