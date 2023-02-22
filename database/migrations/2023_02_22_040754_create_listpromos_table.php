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
        Schema::create('listpromos', function (Blueprint $table) {
            $table->id();
            $table->string('deskripsi');
            $table->string('namapromotor');
            $table->string('kategori');
            $table->string('masapromo');
            $table->string('limit');
            $table->string('brand');
            $table->string('namapromo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listpromos');
    }
};
