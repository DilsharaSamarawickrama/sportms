<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('blood_groups', function (Blueprint $table) {
            $table->id();
            $table->string('blood_group', 5)->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blood_groups');
    }
};
