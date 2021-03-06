<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('student_education_histories', function (Blueprint $table) {
            $table->id();
            $table->string('studentId', 30);
            $table->foreign('studentId')->references('studentId')->on('student_personal_details')->onDelete('cascade')->onUpdate('cascade');
            $table->string('school', 200);
            $table->year('from_year');
            $table->year('to_year');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_education_histories');
    }
};
