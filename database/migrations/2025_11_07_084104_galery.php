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
        Schema::create('galery', function(Blueprint $table){
            $table->id();
            $table->text('images');
            $table->foreignId('kategori_id')->constrained('kategori')->onUpdate('cascade')->onDelete('cascade');
            $table->string('deskripsi',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galery');
    }
};
