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
        Schema::create('bio_data', function (Blueprint $table) {
            $table->id();
            $table->string('user_pid');
            $table->foreign('user_pid')->references('pid')->on('users')->onDelete('cascade');
            $table->string('nin');
            $table->string('nin_path')->nullable();
            $table->string('passport')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gsm');
            $table->string('gender');
            $table->string('dob');
            $table->string('state_of_origin')->nullable();
            $table->string('lga_of_origin')->nullable();
            $table->string('residence_state')->nullable();
            $table->string('residence_lga')->nullable();
            $table->string('address')->nullable();
            $table->tinyInteger('application_status')->default(0)->comment('0:pending,1:approved,2:denied');
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bio_data');
    }
};
