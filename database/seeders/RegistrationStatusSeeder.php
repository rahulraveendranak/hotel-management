<?php

namespace Database\Seeders;

use App\Models\RegistrationStatus;
use Illuminate\Database\Seeder;

class RegistrationStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RegistrationStatus::truncate();

        RegistrationStatus::create([
            'title' => "Pending"
        ]);

        RegistrationStatus::create([
            'title' => "Waiting List"
        ]);

        RegistrationStatus::create([
            'title' => "Booked"
        ]);

        RegistrationStatus::create([
            'title' => "Rejected"
        ]);
    }
}
