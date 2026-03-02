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
        Schema::create('floor_rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_floor_id')->constrained('property_floors')->cascadeOnDelete();
            $table->integer('rooms')->default(0)->index();
            $table->integer('main_rooms')->default(0)->index();
            $table->integer('saloons')->default(0)->index();
            $table->integer('living_rooms')->default(0)->index();
            $table->timestamps();
            $table->unique('property_floor_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('floor_rooms');
    }
};
