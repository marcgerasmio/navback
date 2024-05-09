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
        Schema::create('scheduling', function (Blueprint $table) {
            $table->id('scheduling_id');
            $table->integer('mentor_id')->nullable()->default(null);
            $table->foreign('mentor_id')->references('id')->on('users')->onDelete('SET NULL');
            $table->integer('team_id')->nullable()->default(null);
            $table->foreign('team_id')->references('team_id')->on('teams')->onDelete('SET NULL');
            $table->string('month')->nullable()->default(null);
            $table->string('date')->nullable()->default(null);
            $table->string('year')->nullable()->default(null);
            $table->string('time')->nullable()->default(null);
            $table->string('status')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scheduling');
    }
};
