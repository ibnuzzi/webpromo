<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = [
            [
                'name' => 'Admin Promotor',
                'email' => 'admin@gmail.com',
                'password' => Hash::make ('12345678'),
                'remember_token' => Str::random (60),
                'role' => 'admin',
            ],
        ];
        User::insert($admin);
    }
}
