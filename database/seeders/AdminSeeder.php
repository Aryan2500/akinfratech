<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Admin',
            'email' => 'admin@akinfratech.com',
            'password' => Hash::make('admin@akinfratech.com'),
            'usertype_id' => 1,
            'parent_id' => 0,
            'role_id' => 1,
        ]);

        UserRole::create([
            'user_id' => 1,
            'role_id' => 1,
        ]);
    }
}
