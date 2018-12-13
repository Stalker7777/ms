<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('roles_id')->unsigned()->default(1);
            $table->foreign('roles_id')->references('id')->on('roles');
            $table->integer('performer_id')->unsigned()->default(1);
            $table->foreign('performer_id')->references('id')->on('users');
            $table->integer('director_id')->unsigned()->default(1);
            $table->foreign('director_id')->references('id')->on('users');
            $table->string('name');
            $table->text('note');
            $table->integer('status_id')->unsigned()->default(1);
            $table->foreign('status_id')->references('id')->on('status');
            $table->date('deadline');
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
        Schema::dropIfExists('tasks');
    }
}
