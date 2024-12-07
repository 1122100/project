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
    Schema::create('products', function (Blueprint $table) {
        $table->id();  // id kolom
        $table->string('name');
        $table->text('description')->nullable();
        $table->integer('price');
        $table->integer('stock');
        $table->unsignedBigInteger('category_id')->nullable();
        $table->string('image')->nullable();
        $table->timestamps();  // created_at dan updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
