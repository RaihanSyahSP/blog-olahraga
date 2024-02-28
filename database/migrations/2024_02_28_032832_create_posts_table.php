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
            $table->string("title", length:"2048");
            $table->string("slug", length:"2048");
            $table->string("thumbnail", length:"2048")->nullable();
            $table->longText("body");
            $table->boolean("active")->default(true);
            $table->string("youtube_link", length:"2048")->nullable();
            $table->dateTime("published_at")->nullable();
            $table->foreignIdFor(\App\Models\User::class, column:"user_id");
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
