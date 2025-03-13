<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age')->unsigned();
            $table->string('studied_at')->nullable(); // ✅ New field
            $table->string('hometown');
            $table->string('course')->nullable(); // ✅ New field
            $table->text('hobbies')->nullable(); // ✅ New field
            $table->timestamps(); // ✅ Automatically creates created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about');
    }
};
