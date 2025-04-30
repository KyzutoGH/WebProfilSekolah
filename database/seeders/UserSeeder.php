<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void 
    {
        User::firstOrCreate(
            ['email' => 'smppgribakung@gmail.com'],
            [
                'name' => 'Admin Smp Pgri',
                'password' => bcrypt('smppgri1984'),
            ]
        );
    }
}
