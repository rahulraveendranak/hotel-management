<?php

namespace Database\Seeders;

use App\Models\Floor;
use Illuminate\Database\Seeder;

class FloorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Floor::truncate();

        Floor::create([
            'title' => "1 st Floor"
        ]);

        Floor::create([
            'title' => "2nd Floor"
        ]);

        Floor::create([
            'title' => "3rd Floor"
        ]);
    }
}
