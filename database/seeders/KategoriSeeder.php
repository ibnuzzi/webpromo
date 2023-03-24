<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

            DB::table('kategoris')->insert([
                'kategori' => 'Elektronik',
                'fotoproduk' => 'elektronik1.jpg',
            ]);
            DB::table('kategoris')->insert([
                'kategori' => 'Makanan',
                'fotoproduk' => 'makanan1.jpeg',
            ]);
            DB::table('kategoris')->insert([
                'kategori' => 'Pakaian',
                'fotoproduk' => 'pakaian1.jpg',
            ]);
            DB::table('kategoris')->insert([
                'kategori' => 'Travel',
                'fotoproduk' => 'travel.jpg',
            ]);
            DB::table('kategoris')->insert([
                'kategori' => 'Hiburan',
                'fotoproduk' => 'hiburan1.jpg',
            ]);
            DB::table('kategoris')->insert([
                'kategori' => 'Jasa',
                'fotoproduk' => 'jasa1.png',
            ]);
            DB::table('kategoris')->insert([
                'kategori' => 'Kecantikan',
                'fotoproduk' => 'kecantikan1.jpeg',
            ]);
            DB::table('kategoris')->insert([
                'kategori' => 'Aksesoris',
                'fotoproduk' => 'aksesoris1.jpeg',
            ]);
            DB::table('kategoris')->insert([
                'kategori' => 'Bioskop',
                'fotoproduk' => 'bioskop1.jpg',
            ]);
            DB::table('kategoris')->insert([
                'kategori' => 'Katalog',
                'fotoproduk' => 'katalog1.jpg',
            ]);
            DB::table('kategoris')->insert([
                'kategori' => 'Liburan',
                'fotoproduk' => 'liburan1.jpg',
            ]);
            DB::table('kategoris')->insert([
                'kategori' => 'Perlengkapan Bayi',
                'fotoproduk' => 'perlengkapanbayi1.jpg',
            ]);

    }
}
