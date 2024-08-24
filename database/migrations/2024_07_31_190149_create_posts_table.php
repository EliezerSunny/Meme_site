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
		$table->string('name')->nullable();
		$table->string('username')->nullable();
		$table->string('email')->nullable();
		$table->string('image')->nullable();
		$table->longText('post')->nullable();
		$table->string('comment')->nullable();
		$table->string('repost')->nullable();
		$table->string('like')->nullable();
		$table->string('view')->nullable();
		$table->string('share')->nullable();
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
