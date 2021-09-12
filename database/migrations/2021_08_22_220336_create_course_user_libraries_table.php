<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseUserLibrariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_user_libraries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_library_id');
            $table->unsignedBigInteger('course_id');
            $table->boolean('visible');
        });

        Schema::table('course_user_libraries', function (Blueprint $table) {
            $table->foreign('course_id')
                ->references('id')
                ->on('courses');
        });

        //TODO: Corrigir em produção
        /*Schema::table('course_user_libraries', function (Blueprint $table) {
            $table->foreign('user_library_id')
                ->references('id')
                ->on('user_Libraries');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_user_libraries');
    }
}
