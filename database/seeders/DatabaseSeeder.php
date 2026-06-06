<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. ISI DATA PEGAWAI 
        DB::table('pegawai')->insert([
            [
                'nik' => '1234567890123456',
                'nama' => 'Ahmad Subarjo',
                'jabatan' => 'Admin Utama',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nik' => '3201234567890001',
                'nama' => 'Siti Aminah',
                'jabatan' => 'Staff Lapangan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nik' => '3201234567890002',
                'nama' => 'Budi Setiawan',
                'jabatan' => 'Validator',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // 2. ISI DATA MASYARAKAT 
        DB::table('masyarakat')->insert([
            [
                'nik' => '3201112233440001',
                'nama' => 'Rian Hidayat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nik' => '3201112233440002',
                'nama' => 'Dewi Lestari',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}