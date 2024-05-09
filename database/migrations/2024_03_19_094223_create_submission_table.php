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
        Schema::create('submission', function (Blueprint $table) {
            $table->id('submission_id');
            $table->integer('team_id')->nullable()->default(null);;
            $table->foreign('team_id')->references('team_id')->on('teams')->onDelete('SET NULL');
            $table->integer('milestone_id')->nullable()->default(null);;
            $table->foreign('milestone_id')->references('milestone_id')->on('milestone')->onDelete('SET NULL');
            $table->integer('topic_id')->nullable()->default(null);;
            $table->foreign('topic_id')->references('topic_id')->on('topic')->onDelete('SET NULL');
            $table->string('submission_link')->nullable()->default(null);
            $table->string('status')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submission');
    }
};
