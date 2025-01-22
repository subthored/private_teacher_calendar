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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('credentials');
            $table->string('parent_credentials');
            $table->integer('age');
            $table->date('date_of_birth')->nullable();
            $table->string('phone_number');
            $table->string('parent_phone_number');
            $table->string('school_time');
            $table->string('stud_length');
            $table->integer('lessons_in_week');
            $table->integer('lesson_length');
            $table->string('lesson');
            $table->string('instrument_rent');
            $table->string('comment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
