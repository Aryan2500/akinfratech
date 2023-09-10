<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\RolePermission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermisssionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        foreach (PERMISSIONS as $key => $permissions) {
            RolePermission::create([
                'role_id' => 1,
                'permission_id' => $key + 1,
            ]);
        }
    }
}
