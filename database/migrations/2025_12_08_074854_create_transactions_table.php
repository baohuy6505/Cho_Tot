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
    Schema::create('transactions', function (Blueprint $table) {
        $table->id();
        $table->foreignId('buyer_id')->constrained('users')->onDelete('cascade');
        $table->foreignId('seller_id')->constrained('users')->onDelete('cascade');
        $table->foreignId('post_id')->constrained('posts')->onDelete('cascade');
        $table->enum('status', ['completed', 'failed', 'no-show'])->default('completed');
        $table->tinyInteger('rating')->nullable(); // 1-5 sao
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
