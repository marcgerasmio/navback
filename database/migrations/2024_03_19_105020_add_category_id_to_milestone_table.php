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
        Schema::table('milestone', function (Blueprint $table) {
            $table->integer('tbi_id')->nullable()->default(null);;
            $table->foreign('tbi_id')->references('tbi_id')->on('tbi')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('milestone', function (Blueprint $table) {
            //
        });
    }
};
