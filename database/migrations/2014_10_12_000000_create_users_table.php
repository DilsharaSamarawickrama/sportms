<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('user_id', 20)->unique();
            $table->string('role', 50);
            $table->foreign('role')->references('role')->on('role')->onDelete('cascade')->onUpdate('cascade');
            $table->string('password', 500);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
