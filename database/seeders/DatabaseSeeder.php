<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     * 
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $dataNewAdmin = [
            'nik' => '123456',
            'name' => 'Anis Safitri',
            'jeniskelamin' => 'Perempuan',
            'alamat' => 'JL. Indonesia Raya',
            'notelepon' => '087811111111',
            'role' => 'Admin',
            'email' => 'anissafitri@gmail.com',
            'password' =>bcrypt('123456')
        ];
        User::create($dataNewAdmin);
    }
}
