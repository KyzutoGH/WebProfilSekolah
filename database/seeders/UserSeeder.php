<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void 
    {
        $user = [
            'name' => 'Admin Smp Pgri',
            'email' => 'smppgribakung@gmail.com',
            'password' => bcrypt('smppgri1984'), 
        ];

        User::create($user);
    }
}
