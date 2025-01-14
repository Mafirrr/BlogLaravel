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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("thumbnail", 255);
            $table->string("title", 100);
            $table->string("slug", 100)->unique();
            $table->text("content");
            $table->foreignId("category_id")->references("id")->on("categories")->restrictOnDelete()->cascadeOnUpdate();
            $table->foreignId("user_id")->references("id")->on("users")->restrictOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
