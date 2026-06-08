<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'user',
            'name' => 'Usuari Prova',
            'email' => 'prova@example.com',
            'password' => Hash::make('1234'),
        ]);

        User::create([
            'username' => 'user2',
            'name' => 'Usuari Prova 2',
            'email' => 'rova@example.com',
            'password' => Hash::make('1234'),
        ]);

        User::create([
            'username' => 'juan',
            'name' => 'Usuari Juan',
            'email' => 'prova2@example.com',
            'password' => Hash::make('1234'),
        ]);

        User::create([
            'username' => 'pepe',
            'name' => 'Usuari Pepe',
            'email' => 'admin@example.com',
            'password' => Hash::make('1234'),
        ]);
    }
}
