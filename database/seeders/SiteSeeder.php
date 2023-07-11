<?php

namespace Database\Seeders;

use App\Models\Site;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        for ($i = 1; $i < 10; $i++) {
            # code...
            Site::create([
                'name' => 'Site' . $i,
                'address' => 'adress of site' . $i,
                'total_size' => 2000 + $i,
                'user_id' => 1,
                'sitehead_id' => random_int(1, 5),
            ]);
        }
    }
}
