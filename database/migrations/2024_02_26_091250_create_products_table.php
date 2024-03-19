<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->decimal('price',16,2);
            $table->string('name', 127);
            $table->string('description');
            $table->string('photo');
            /* вес продукта */
            $table->integer('mass');
            $table->integer('quantity');
            $table->foreignId('category_id')->constrained()->onUpdate('cascade');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
