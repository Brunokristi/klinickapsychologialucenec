<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::table('services', function (Blueprint $table) {
            $table->string('description', 1000)->change();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });

        Schema::table('steps', function (Blueprint $table) {
            $table->string('text', 100)->change();
        });
    }

    public function down() {
        Schema::table('services', function (Blueprint $table) {
            $table->string('description', 255)->change();
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });

        Schema::table('steps', function (Blueprint $table) {
            $table->string('text', 255)->change();
        });
    }
};
