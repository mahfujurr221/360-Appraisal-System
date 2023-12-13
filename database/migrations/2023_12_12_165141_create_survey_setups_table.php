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
        Schema::create('survey_setups', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('ended_at')->nullable();
            $table->date('started_at')->nullable();
            $table->string('description')->nullable();
            $table->json('questions')->nullable();
            $table->string('status')->default('inactive')->comment('active, inactive','completed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey_setups');
    }
};
