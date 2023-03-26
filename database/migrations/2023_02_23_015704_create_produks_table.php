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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('namamerek');
            $table->string('namapromo');
            $table->text('deskripsipromo');
            $table->bigInteger('kategoripromo');
            $table->date('masapromo')->nullable();
            $table->text('used_by_guest')->nullable();
            $table->string('sampul');
            $table->integer('limit');
            $table->boolean('status')->default(0);
            $table->text('pesan')->nullable();
            $table->integer('views')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
