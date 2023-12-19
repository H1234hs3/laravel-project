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
        Schema::create('cources_student', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('course_id')->index()->nullable();
            $table->unsignedBiginteger('student_id')->index()->nullable();
            $table->foreign('course_id')->references('id')
                 ->on('cources')->onDelete('cascade');
                 
            $table->foreign('student_id')->references('id')
                ->on('students')->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_courses');
    }
};
