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
        Schema::create('_donor_program', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('program_id')->index()->nullable(); 
            $table->foreign('program_id')->references('id') ->on('programs')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBiginteger('donors_id')->index()->nullable(); 
            $table->foreign('donors_id')->references('id') ->on('donors')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_donor_program');
    }
};
