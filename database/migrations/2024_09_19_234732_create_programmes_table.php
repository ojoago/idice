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
        Schema::create('programmes', function (Blueprint $table) {
            $table->id();
            $table->string('user_pid');
            $table->foreign('user_pid')->references('pid')->on('users')->onDelete('cascade');
            $table->string('program');
            $table->foreign('program')->references('pid')->on('programs')->onDelete('cascade');
            $table->string('sub_program');
            $table->foreign('sub_program')->references('pid')->on('sub_programs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programmes');
    }
};
