<?php

namespace Database\Seeders;

use App\Models\Dieta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DietaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dieta = new Dieta();
        $dieta->user_id = 1;
        $dieta->title = 'Dieta 1';
        $dieta->description = 'Come más verdura turbo abuela';
        $dieta->totalCalories = 2000;
        $dieta->date = '2023-09-01';
        $dieta->save();

        // $dieta = new Dieta();
        // $dieta->title = 'Dieta 2';
        // $dieta->description = 'y dale dale comba para que la niña no baile sola';
        // $dieta->totalCalories = 2000;
        // $dieta->date = '2023-07-19';
        // $dieta->user_id = 2;
        // $dieta->save();

        // $dieta = new Dieta();
        // $dieta->title = 'Dieta 3';
        // $dieta->description = 'Tiene diabetes';
        // $dieta->totalCalories = 600;
        // $dieta->date = '2023-02-09';
        // $dieta->user_id = 1;
        // $dieta->save();
    }
}
