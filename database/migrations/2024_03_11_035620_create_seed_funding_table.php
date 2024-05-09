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
        Schema::create('seed_funding', function (Blueprint $table) {
            $table->id('funding_id');
            $table->string('funding_agency')->nullable()->default(null);
            $table->string('grant_name')->nullable()->default(null);
            $table->string('budget_allocated')->nullable()->default(null);
            $table->string('funding_priorities')->nullable()->default(null);
            $table->string('funding_description')->nullable()->default(null);
            $table->string('requirements')->nullable()->default(null);
            $table->string('submission_link')->nullable()->default(null);
            $table->string('deadline')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seed_funding');
    }
};
