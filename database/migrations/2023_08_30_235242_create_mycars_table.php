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
        Schema::create('mycars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table -> string('owner');
            $table ->string('image');
            $table -> string('description');
            $table -> integer('Rate_per_day');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mycars');
    }
};
