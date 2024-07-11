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
        Schema::create('dienthoai', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30)->unique();
            $table->string('description', 1000)->nullable();
            $table->dateTime('create_at');
            $table->double('price_regular', 8, 2);
            $table->double('price_sale', 8, 2)->nullable();
            $table->double('url_img', 200)->nullable();
            $table->integer('quantity')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dienthoai');
    }
};
