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
        Schema::create('qualifications', function (Blueprint $table) {
            $table->id();
            $table->string('user_pid');
            $table->foreign('user_pid')->references('pid')->on('users')->onDelete('cascade');
            $table->string('institution');
            $table->string('field');
            $table->string('year');
            $table->string('degree');
            $table->string('grade')->nullable();
            $table->string('edited_by')->nullable();
            $table->foreign('edited_by')->references('pid')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
