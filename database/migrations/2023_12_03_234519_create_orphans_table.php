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
        Schema::create('orphans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name_orphans');
            $table->string('country');
                $table->string('city');
            $table->string('state')->nullable();
            $table->string('village')->nullable();
            $table->string('nationality');
            $table->dateTime('birth_date');
            $table->string('school_level');
            $table->string('place_of_birth')->nullable();
            $table->dateTime('father_death_date');
            $table->string('mother_name');
            $table->integer('mother_N_ID');
            $table->string('mother_state');
            $table->string('mother_work');
            $table->string('orphan_place');
            $table->integer('bro_count');
            $table->integer('sister_count');
            $table->string('Type_of_orphan');
            $table->string('Guardian_name');
            $table->string('Guardian_N_ID');
            $table->integer('father_N_ID');
            $table->string('relationship_with_an_orphan');
            $table->string('Health_status');
            $table->integer('Guardian_phone');
            $table->string('House_type');
            $table->string('image');
            $table->string('gender');
            $table->longText('description')->nullable();
            $table->boolean("status")->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orphans');
    }
};
