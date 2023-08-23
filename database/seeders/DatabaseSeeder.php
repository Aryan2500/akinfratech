<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Permissioncategory;
use App\Models\Usertype;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UsertypeSeeder::class,
            AdminSeeder::class,
            RoleSeeder::class,
            PermissioncategorySeeder::class,
            PermisssionSeeder::class,
            SiteSeeder::class,
            PlotSeeder::class,
            BlockSeeder::class

        ]);
    }
}
