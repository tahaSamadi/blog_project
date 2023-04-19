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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('pic');
            $table->string('pic_banner');
            $table->string('meta_tags');
            $table->bigInteger('like')->default('0');
            $table->integer('active')->default('1');
            $table->longText('description');
            $table->bigInteger('hit')->default('0');
            $table->foreignId('cat_id')->constrained('news_cat')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
