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
        Schema::create('divisions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 45)->unique();
            $table->integer('level');
            $table->integer('collaborator');
            $table->string('embassador');
            $table->integer('upper_division_id')->nullable();
            $table->foreign('upper_division_id')->references('id')->on('divisions');
            $table->integer('sub_division_id')->nullable();
            $table->foreign('sub_division_id')->references('id')->on('divisions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('divisions');
    }
};
