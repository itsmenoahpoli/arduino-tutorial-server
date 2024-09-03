<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->createOrFirst([
            'name' => 'Admin Account',
            'email' => 'admin@domain.com',
            'password' => bcrypt('password')
        ]);
    }
}
