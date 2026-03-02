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
            $table->foreignId('type_id')->constrained('types')->nullOnDelete();
            $table->foreignId('category_id')->constrained('categories')->nullOnDelete();
            $table->decimal('area', 10, 2)->nullable();
            $table->integer('floors')->nullable();
            $table->decimal('floored_area', 10, 2)->nullable();
            $table->integer('rooms')->nullable();
            $table->decimal('garage_size', 10, 2)->nullable();
            $table->dateTime('published_at');
            $table->dateTime('delivery_date')->nullable();
            $table->json('meta_title')->nullable();
            $table->json('meta_description')->nullable();
            $table->string('meta_image')->nullable();
            $table->softDeletes();
            $table->index('type_id');
            $table->index('category_id');
            $table->index('published_at');
            $table->index('price');
            $table->index('area');
            $table->index('rooms');
            $table->index('floors');
            $table->index('floored_are');
            $table->index('garage_size');
            $table->index(['offer', 'type_id', 'category_id', 'price']);

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
