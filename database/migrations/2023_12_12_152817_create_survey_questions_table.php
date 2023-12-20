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
        Schema::create('survey_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_set_id')->constrained('question_sets');
            $table->string('question');
            $table->string('option1')->nullable();
            $table->integer('point1')->nullable();
            $table->string('option2')->nullable();
            $table->integer('point2')->nullable();
            $table->string('option3')->nullable();
            $table->integer('point3')->nullable();
            $table->string('option4')->nullable();
            $table->integer('point4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey_questions');
    }
};
