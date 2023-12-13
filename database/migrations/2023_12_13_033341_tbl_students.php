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
        Schema::create('tbl_students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('student_id')->unique;
            $table->string('gender');
            $table->string('major');
            $table->integer('age');
            $table->integer('batch');
            $table->string('image')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
