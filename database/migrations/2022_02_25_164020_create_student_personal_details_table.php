<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('student_personal_details', function (Blueprint $table) {
            $table->string('studentId', 30)->unique();
            $table->foreign('studentId')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nic', 20);
            $table->string('designation', 5);
            $table->string('name', 200);
            $table->string('contact', 10);
            $table->string('email', 200);
            $table->date('birthday');
            $table->string('birthplace', 20);
            $table->string('gender', 6);
            $table->string('blood_group', 5);
            $table->foreign('blood_group')->references('blood_group')->on('blood_groups')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('weight');
            $table->integer('height');
            $table->string('address', 500);
            $table->string('image', 200)->nullable();
            $table->string('category', 10);
            $table->string('faculty', 50);
            $table->foreign('faculty')->references('faculty')->on('faculties')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_personal_details');
    }
};
