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
        Schema::table('users', function (Blueprint $table) {
            $table->string('course_year')->nullable()->default(null);
            $table->string('phone_number')->nullable()->default(null);
            $table->string('startup_name')->nullable()->default(null);
            $table->string('expertise')->nullable()->default(null);
            $table->string('team_name')->nullable()->default(null);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('course_year');
            $table->dropColumn('phone_number');
            $table->dropColumn('startup_name');
            $table->dropColumn('expertise');
            $table->dropColumn('team_name');
        });
    }
};
