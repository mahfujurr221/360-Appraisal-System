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
            $table->foreignId('survey_detail_id');
            $table->foreignId('survey_for_id');
            $table->json('survey_by_ids')->nullable();
            $table->foreignId('question_set_id')->constrained('question_sets');
            $table->json('questions')->nullable();
            $table->string('status')->default('active')->comment('active, inactive','completed');
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
