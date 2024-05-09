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
        Schema::create('mentor_schedule', function (Blueprint $table) {
            $table->id('mentorschedule_id');
            $table->integer('mentor_id')->nullable()->default(null);
            $table->foreign('mentor_id')->references('id')->on('users')->onDelete('SET NULL');
            $table->string('date')->nullable()->default(null);
            $table->string('time')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentor_schedule');
    }
};
