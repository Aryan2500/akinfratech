<?php

namespace Database\Seeders;

use App\Models\Block;
use App\Models\Plot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 1; $i < 10; $i++) {
            # code...
            Block::create([
                'name' => 'BLOCK' . $i,
                'area' => 40000 + $i,
                'booked_area' => '20000',
                'remaining_area' => '1000',
                'user_id' => 1,
                'site_id' => 1,
            ]);
        }
    }
}
