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
        Schema::create('arduino_tutorials', function (Blueprint $table) {
            $table->id();
            $table->string('vid_uid')->unique();
            $table->string('title')->unique();
            $table->string('title_slug')->unique();
            $table->text('description')->nullable();
            $table->string('cover_img_src');
            $table->string('video_src');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arduino_tutorials');
    }
};
