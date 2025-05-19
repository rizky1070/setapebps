<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Budi Santoso',
                'jabatan' => 'Manager',
                'email' => 'budi@example.com',
                'is_admin' => 1,
                'is_leader' => 1,
                'is_hamukti' => 1,
                'is_active' => 1,
                'username' => 'budi123',
                'gambar' => 'budi.jpg',
                'password' => Hash::make('12345678'), // Hash password
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
