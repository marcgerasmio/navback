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
        Schema::create('competition', function (Blueprint $table) {
            $table->id('competition_id');
            $table->string('organization_host')->nullable()->default(null);
            $table->string('competition_name')->nullable()->default(null);
            $table->string('theme')->nullable()->default(null);
            $table->string('competition_description')->nullable()->default(null);
            $table->string('requirements')->nullable()->default(null);
            $table->string('registration_link')->nullable()->default(null);
            $table->string('venue')->nullable()->default(null);
            $table->string('date')->nullable()->default(null);
            $table->string('competition_mode')->nullable()->default(null);
            $table->string('prize_details')->nullable()->default(null);
            $table->string('date_submission')->nullable()->default(null);
            $table->string('image_path')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competition');
    }
};
