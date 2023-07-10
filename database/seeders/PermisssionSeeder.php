<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermisssionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        foreach (PERMISSIONS as $permissions) {
            foreach ($permissions as $key => $p) {
                Permission::create([
                    'name' => $p['name'],
                    'url' => $p['url'],
                    'permissioncategory_id' => $p['parent_id']
                ]);
            }
        }
    }
}
