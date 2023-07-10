<?php

namespace Database\Seeders;

use App\Models\Permissioncategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissioncategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        foreach (PERMISSIONS_CATEGORY as $cat) {
            Permissioncategory::create([
                'name' => $cat
            ]);
        }
    }
}
