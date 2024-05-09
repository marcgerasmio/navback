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
        Schema::create('topic', function (Blueprint $table) {
            $table->id('topic_id');
            $table->integer('milestone_id')->nullable()->default(null);;
            $table->foreign('milestone_id')->references('milestone_id')->on('milestone')->onDelete('SET NULL');
            $table->string('topic_name')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topic');
    }
};
