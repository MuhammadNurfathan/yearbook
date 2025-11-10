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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
             $table->foreignId('program_studi_id')->constrained('program_studi')->onDelete('restrict')->onUpdate('cascade');
            $table->string('nim')->unique();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan')->nullable();
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('foto_profil')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->text('alamat')->nullable();
            $table->string('no_telepon')->nullable();
            $table->string('email')->nullable();
            
            // Data Yearbook
            $table->text('motto')->nullable(); // motto hidup
            $table->text('cita_cita')->nullable();
            $table->text('kesan_pesan')->nullable();
            $table->text('quote_favorit')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            
            // Achievements & Activities
            $table->json('hobi')->nullable(); // ["Membaca", "Gaming"]
            $table->json('prestasi')->nullable(); // array of achievements
            $table->json('organisasi')->nullable(); // array of organizations
            
            $table->integer('urutan')->default(0); // untuk sorting
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
