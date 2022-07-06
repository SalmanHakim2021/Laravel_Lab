<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterColumnStudentIdInStudentTimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student_timetables', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('users');
            $table->foreign('day_id')->references('id')->on('days');
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('hall_id')->references('id')->on('lecture_halls');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_timetables', function (Blueprint $table) {
            //
        });
    }
}