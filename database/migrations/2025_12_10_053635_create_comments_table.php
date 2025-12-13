<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            // fk user 
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // fk post
            $table->foreignId('post_id')->constrained()->onDelete('cascade');
            // Self-referencing FK rely
            //if null no cmt else = id go cmt
            $table->foreignId('parent_id')->nullable()->constrained('comments')->onDelete('cascade');
            $table->text('content');
            $table->timestamps(); // date
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
};