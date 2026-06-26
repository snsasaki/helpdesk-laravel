<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'fybrid',
            'email' => 'user@example.com',
            'password' => 'password',
            // 'password' => Hash::make('password'),
        ]);
    }
}
