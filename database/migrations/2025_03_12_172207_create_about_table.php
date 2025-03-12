<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->date('birthday');
            $table->string('hometown');
            $table->string('university');
            $table->string('course');
            $table->text('hobbies');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('about');
    }
};
