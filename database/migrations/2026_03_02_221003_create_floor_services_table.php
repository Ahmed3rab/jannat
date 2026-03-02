<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('floor_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_floor_id')->constrained('property_floors')->cascadeOnDelete();
            $table->integer('kitchens')->default(0)->index();
            $table->integer('bathrooms')->default(0)->index();
            $table->integer('offices')->default(0)->index();
            $table->integer('ac_units')->default(0)->index();
            $table->enum('furnishing', ['none','partial','full'])->nullable()->index();
            $table->timestamps();
            $table->unique('property_floor_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('floor_services');
    }
};
