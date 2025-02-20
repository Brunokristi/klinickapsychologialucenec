<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() {
        Schema::create('dates', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('text', 100);
        });
    }

    public function down() {
        Schema::dropIfExists('dates');
    }
};
