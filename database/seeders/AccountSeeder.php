<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'Admin@gmail.com',
            'password' => Hash::make('12345678'), 
            'phone' => '0901234567',
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Nguyễn Quản Lý',
            'email' => 'Manager@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '0901234568',
            'role' => 'manager', 
        ]);

        User::create([
            'name' => 'Khách Hàng A',
            'email' => 'Client@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '0901234569',
            'role' => 'user',
        ]);
    }
}
