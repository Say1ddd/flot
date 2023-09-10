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
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::create('brand_icons', function (Blueprint $table) {
            $table->id();
            $table->string('icon_path')->unique();
            $table->foreignId('brand_id')
                ->constrained('brands')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });

        Schema::create('brand_images', function (Blueprint $table) {
            $table->id();
            $table->string('image_path')->unique();
            $table->foreignId('brand_id')
                ->constrained('brands')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
        Schema::dropIfExists('brand_icons');
        Schema::dropIfExists('brand_images');
    }
};
