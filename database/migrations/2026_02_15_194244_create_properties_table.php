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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('reference')->unique();
            $table->json('title');
            $table->json('description');
            $table->json('brief')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->string('offer')->index();
            $table->foreignId('type_id')->constrained('types');
            $table->foreignId('category_id')->constrained('categories');
            $table->decimal('area', 10, 2)->nullable();
            $table->integer('floors')->nullable();
            $table->decimal('floored_area', 10, 2)->nullable();
            $table->integer('rooms')->nullable();
            $table->decimal('parking_capacity', 10, 2)->nullable();
            $table->dateTime('published_at');
            $table->dateTime('delivery_date')->nullable();
            $table->foreignId('location_id')->constrained('locations');
            $table->json('nearest_landmark')->nullable();

            $table->string('map_url')->nullable();
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();

            $table->softDeletes();

            $table->index('type_id');
            $table->index('category_id');
            $table->index('location_id');
            $table->index('published_at');
            $table->index('price');
            $table->index('area');
            $table->index('rooms');
            $table->index('floors');
            $table->index('floored_area');
            $table->index('parking_capacity');
            $table->index(['offer', 'type_id', 'category_id', 'price']);
            $table->index(['offer', 'location_id', 'price']);

            $table->unsignedInteger('rooms_total')->default(0)->index();
            $table->unsignedInteger('main_rooms_total')->default(0)->index();
            $table->unsignedInteger('saloons_total')->default(0)->index();
            $table->unsignedInteger('living_rooms_total')->default(0)->index();

            $table->unsignedInteger('kitchens_total')->default(0)->index();
            $table->unsignedInteger('bathrooms_total')->default(0)->index();
            $table->unsignedInteger('offices_total')->default(0)->index();
            $table->unsignedInteger('ac_units_total')->default(0)->index();
            $table->boolean('is_fully_furnished')->default(false)->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
