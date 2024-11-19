<?php

namespace Database\Seeders;

use App\Models\Dieta;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(DietaSeeder::class);

        User::factory(3)->create();
        Dieta::factory(3)->create();
    }

    
}
