<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('sport_equipment_issuings', function (Blueprint $table) {
            $table->id();
            $table->string('studentId', 30);
            $table->foreign('studentId')->references('studentId')->on('student_personal_details')->onDelete('cascade')->onUpdate('cascade');
            $table->string('equipment', 200);
            $table->foreign('equipment')->references('equipment')->on('sport_equipment')->onDelete('cascade')->onUpdate('cascade');
            $table->dateTime('issued_at');
            $table->integer('issued_quantity');
            $table->dateTime('returned_at')->nullable();
            $table->integer('returned_quantity');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sport_equipment_issuings');
    }
};
