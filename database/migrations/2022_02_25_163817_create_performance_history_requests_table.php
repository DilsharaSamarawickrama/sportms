<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('performance_history_requests', function (Blueprint $table) {
            $table->id();
            $table->string('studentId', 30);
            $table->foreign('studentId')->references('studentId')->on('student_personal_details')->onDelete('cascade')->onUpdate('cascade');
            $table->string('request_status', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('performance_history_requests');
    }
};
