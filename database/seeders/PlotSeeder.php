<?php

namespace Database\Seeders;

use App\Models\Plot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 1; $i < 10; $i++) {
            # code...
            Plot::create([
                'name' => 'PLOT' . $i,
                'address' => 'Address' . $i,
                'size' => '200sq feet',
                'price' => '20000',
                'plottype_id' => random_int(1, 3),
                'site_id' => random_int(1, 5),
                'user_id' => 1,
            ]);
        }
    }
}
