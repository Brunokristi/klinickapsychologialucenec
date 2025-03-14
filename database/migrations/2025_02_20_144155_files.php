<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('path', 100);
            $table->unsignedBigInteger('service_id');
            
            // Add a foreign key `service_id` for associated with `services`
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('files');
    }
};
