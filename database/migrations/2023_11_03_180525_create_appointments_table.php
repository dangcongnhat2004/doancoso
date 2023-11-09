<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('doctor_id');
            $table->date('appointment_date');
            $table->time('appointment_time');
            $table->enum('status', ['confirmed', 'pending', 'canceled', 'completed']);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('doctor_id')->references('id')->on('doctors');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
