<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $adminpromotor = [
            [
                'name' => 'Admin Promo',
                'email' => 'admin@gmail.com',
                'password' => Hash::make ('adminpromo'),
                'role' => 'Admin',
                'remember_token' => Str::random (60),
            ],
        ];
        User::insert($adminpromotor);
    }
}
