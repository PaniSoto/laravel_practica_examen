<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Miguel';
        $user->surname = 'Cabezas';
        $user->phone = '622464867';
        $user->email = 'hola@gmail.com';
        $user->password = '12345678';
        $user->save();

        $user = new User();
        $user->name = 'Turbo';
        $user->surname = 'Abuela';
        $user->phone = '692364361';
        $user->email = 'turborucagitana@gmail.com';
        $user->password = '12345678';
        $user->save();
    }
}
