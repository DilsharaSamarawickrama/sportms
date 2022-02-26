<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('nic', 20);
            $table->string('name', 200);
            $table->string('gender', 6);
            $table->string('position', 30);
            $table->string('email', 100);
            $table->string('contact', 10);
            $table->string('image', 200);
            $table->timestamps('started_work');
            $table->timestamps('left_work');
            $table->string('current_status', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
};
