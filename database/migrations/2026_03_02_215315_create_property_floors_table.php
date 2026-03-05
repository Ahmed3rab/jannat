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
        Schema::create('property_floors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id') ->constrained() ->cascadeOnDelete();
            $table->integer('sort_order')->default(0);
            $table->json('name');
            $table->integer('floor_number')->nullable();
            $table->decimal('area', 10, 2)->nullable();
            $table->decimal('floored_area', 10, 2)->nullable();
            $table->index(['property_id', 'sort_order']);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_floors');
    }
};
