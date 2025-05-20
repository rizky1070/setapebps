<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            [
                'id' => 777,
                'name' => 'Admin',
                'username' => 'admin123',
                'password' => Hash::make('admin123'),
                'roles' => 'ADMIN',
            ],
            [
                'id' => 778,
                'name' => 'User Biasa',
                'username' => 'user123',
                'password' => Hash::make('user123'),
                'roles' => 'USER',
            ],
        ]);
    }
}
