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
        Schema::create('umkms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('owner');
            $table->string('rw');
            $table->string('rt');
            $table->string('category');
            $table->string('price');
            $table->string('phone');
            $table->string('hours');
            $table->text('address');
            $table->text('image')->nullable();
            $table->json('images')->nullable();
            $table->text('description');
            $table->json('products')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkms');
    }
};
