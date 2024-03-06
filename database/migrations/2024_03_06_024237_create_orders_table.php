<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('table_id');
            $table->integer('quantity')->default(0);
            $table->float('total')->default(0);
            $table->timestamps();
    
            $table->foreign('table_id')->references('id')->on('tables')->onDelete('cascade');
        });
    
    }


    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['table_id']); 
        });
    }
    
};
