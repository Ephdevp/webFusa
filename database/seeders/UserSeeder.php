<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "admin",
            "password" => Hash::make("default"),
            "categories" => "admin",
            "password_define" => false
        ]);

        User::create([
            'name' => "comercial1",
            "password" => Hash::make("comercial"),
            "password_define" => false
        ]);

        User::create([
            'name' => "comercial2",
            "password" => Hash::make("comercial"),
            "password_define" => false
        ]);

        User::create([
            'name' => "comercial3",
            "password" => Hash::make("comercial"),
            "password_define" => false
        ]);

        User::create([
            'name' => "comercial4",
            "password" => Hash::make("comercial"),
            "password_define" => false
        ]);

        User::create([
            'name' => "comercial5",
            "password" => Hash::make("comercial"),
            "password_define" => false
        ]);
    }
}
