<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        Role::create([
            'role_name' => "superadmin"
        ]);
        Role::create([
            'role_name' => "admin"
        ]);
        Role::create([
            'role_name' => "teacher"
        ]);
        Role::create([
            'role_name' => "student"
        ]);

        User::create([
            'name' => 'superadmin',
            'username' => 'superadmin',
            'password' => Hash::make('superadmin123'),
            'email' => 'superadmin@gmail.com',
            'role_id' => 1,
            'agurooz_id' => 1,
        ]);
    }
}
