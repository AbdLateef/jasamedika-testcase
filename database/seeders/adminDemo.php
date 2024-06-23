<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class adminDemo extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'avatar' => null,
            'address' => 'bandung',
            'telp' => '08123456789',
            'drive_license' => '123456789'

        ]);
        User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
            'role' => 'client',
            'avatar' => null,
            'address' => 'bandung',
            'telp' => '08123456789',
            'drive_license' => '123456789'
        ]);
    }
}
