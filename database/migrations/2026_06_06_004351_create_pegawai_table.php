<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id(); // Membuat kolom 'id' otomatis (Primary Key)
            
            // Kolom-kolom yang disesuaikan dengan inputan form kamu:
            $table->string('nik', 50);
            $table->string('nama', 100);
            $table->string('jenis_kelamin', 20)->nullable(); // ->nullable() artinya boleh kosong jika tidak diisi
            $table->string('no_telepon', 20)->nullable();
            $table->text('alamat')->nullable();
            $table->string('email', 100)->nullable();
            $table->string('password', 255)->nullable();
            $table->string('jabatan', 50);
            
            $table->timestamps(); // Otomatis membuat kolom 'created_at' dan 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
