<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'first_name' => 'Jean',
            'last_name' => 'Claude',
            'email' => 'jeanclaude@truc.fr',
            'password' => 'JeanClaude',
            'role' => 'user'
        ]);
        User::factory()->create([
           'first_name' => 'Kevin',
           'last_name' => 'Manceau',
           'email' => 'kevinmanceau@gmail.com',
           'password' => 'KevinManceau',
           'role' => 'admin'
        ]);
    }
}
