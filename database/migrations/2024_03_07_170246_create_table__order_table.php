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
        Schema::create('table__order', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('table_id');
            $table->unsignedBigInteger('menu_id');
            $table->unsignedBigInteger('item_id');
            $table->integer('quantity');

            $table->timestamps();
            $table->foreign('table_id')->references('id')->on('tables')->onDelete('cascade');
            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table__order');
    }
};
