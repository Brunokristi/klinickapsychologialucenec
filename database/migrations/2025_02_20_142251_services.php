<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('description', 255);
            $table->string('icon', 1000);
        });
    }

    public function down() {
        Schema::dropIfExists('services');
    }
};
