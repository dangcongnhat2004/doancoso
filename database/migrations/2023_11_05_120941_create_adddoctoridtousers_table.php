<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdddoctoridtousersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('doctor_id')->nullable();
            $table->foreign('doctor_id')->references('id')->on('doctors');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['doctor_id']);
            $table->dropColumn('doctor_id');
        });
    }
}
