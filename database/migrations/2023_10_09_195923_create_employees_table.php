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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            //user_id
            $table->integer('user_id');
            $table->string('name');
            $table->string('email')->unique();
            //phone 
            $table->string('phone')->nullable();
            //dept_id
            $table->integer('dept_id');
            //designation_id
            $table->integer('designation_id');
            //status
            $table->integer('status')->default(1);
            //survey_setup_status
            $table->integer('survey_setup_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
