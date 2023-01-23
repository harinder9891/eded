<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add the master administrator, user id of 1
        User::create([
            'role' => 'admin',
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('secret'),
            'email_verified_at' => now(),
            'active' => true,
        ]);

        User::create([
            'role' => 'user',
            'name' => 'Test User',
            'email' => 'user@user.com',
            'password' => Hash::make('secret'),
            'email_verified_at' => now(),
            'active' => true,
        ]);
    }
}
