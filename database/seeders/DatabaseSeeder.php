<?php

namespace Database\Seeders;

use App\Models\Floor;
use App\Models\RegistrationStatus;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(UserTypeSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(RegistrationStatusSeeder::class);
        $this->call(FloorSeeder::class);
    }
}
