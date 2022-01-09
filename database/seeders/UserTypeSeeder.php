<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserType::truncate();

        UserType::create([
            'title' => "Admin"
        ]);

        UserType::create([
            'title' => "Customer"
        ]);

    }
}
