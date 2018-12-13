<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertTasksData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('tasks')->insert([
            ['id' => 1, 'roles_id' => 1, 'performer_id' => 1, 'director_id' => 2, 'name' => 'name 1', 'note' => 'note note note note note 1', 'status_id' => 1, 'deadline' => '2018-12-25'],
            ['id' => 2, 'roles_id' => 2, 'performer_id' => 2, 'director_id' => 5, 'name' => 'name 2', 'note' => 'note note note note note 2', 'status_id' => 1, 'deadline' => '2018-12-25'],
            ['id' => 3, 'roles_id' => 3, 'performer_id' => 3, 'director_id' => 5, 'name' => 'name 3', 'note' => 'note note note note note 3', 'status_id' => 1, 'deadline' => '2018-12-25'],
            ['id' => 4, 'roles_id' => 4, 'performer_id' => 4, 'director_id' => 5, 'name' => 'name 4', 'note' => 'note note note note note 4', 'status_id' => 1, 'deadline' => '2018-12-25'],
            ['id' => 5, 'roles_id' => 5, 'performer_id' => 5, 'director_id' => 3, 'name' => 'name 5', 'note' => 'note note note note note 5', 'status_id' => 1, 'deadline' => '2018-12-25'],
            ['id' => 6, 'roles_id' => 1, 'performer_id' => 5, 'director_id' => 3, 'name' => 'name 6', 'note' => 'note note note note note 6', 'status_id' => 1, 'deadline' => '2018-12-25'],
            ['id' => 7, 'roles_id' => 2, 'performer_id' => 7, 'director_id' => 2, 'name' => 'name 7', 'note' => 'note note note note note 7', 'status_id' => 1, 'deadline' => '2018-12-25'],
            ['id' => 8, 'roles_id' => 3, 'performer_id' => 8, 'director_id' => 2, 'name' => 'name 8', 'note' => 'note note note note note 8', 'status_id' => 1, 'deadline' => '2018-12-25'],
            ['id' => 9, 'roles_id' => 4, 'performer_id' => 9, 'director_id' => 2, 'name' => 'name 9', 'note' => 'note note note note note 9', 'status_id' => 1, 'deadline' => '2018-12-25'],
            ['id' => 10, 'roles_id' => 5, 'performer_id' => 9, 'director_id' => 3, 'name' => 'name 10', 'note' => 'note note note note note 10', 'status_id' => 1, 'deadline' => '2018-12-26'],
            ['id' => 11, 'roles_id' => 1, 'performer_id' => 1, 'director_id' => 3, 'name' => 'name 11', 'note' => 'note note note note note 11', 'status_id' => 1, 'deadline' => '2018-12-26'],
            ['id' => 12, 'roles_id' => 2, 'performer_id' => 2, 'director_id' => 3, 'name' => 'name 12', 'note' => 'note note note note note 12', 'status_id' => 2, 'deadline' => '2018-12-27'],
            ['id' => 13, 'roles_id' => 3, 'performer_id' => 3, 'director_id' => 5, 'name' => 'name 13', 'note' => 'note note note note note 13', 'status_id' => 3, 'deadline' => '2018-12-27'],
            ['id' => 14, 'roles_id' => 4, 'performer_id' => 4, 'director_id' => 5, 'name' => 'name 14', 'note' => 'note note note note note 14', 'status_id' => 4, 'deadline' => '2018-12-28'],
            ['id' => 15, 'roles_id' => 5, 'performer_id' => 5, 'director_id' => 3, 'name' => 'name 15', 'note' => 'note note note note note 15', 'status_id' => 5, 'deadline' => '2018-12-28'],
            ['id' => 16, 'roles_id' => 1, 'performer_id' => 5, 'director_id' => 3, 'name' => 'name 16', 'note' => 'note note note note note 16', 'status_id' => 1, 'deadline' => '2018-12-29'],
            ['id' => 17, 'roles_id' => 2, 'performer_id' => 7, 'director_id' => 2, 'name' => 'name 17', 'note' => 'note note note note note 17', 'status_id' => 2, 'deadline' => '2018-12-29'],
            ['id' => 18, 'roles_id' => 3, 'performer_id' => 8, 'director_id' => 2, 'name' => 'name 18', 'note' => 'note note note note note 18', 'status_id' => 3, 'deadline' => '2018-12-30'],
            ['id' => 19, 'roles_id' => 4, 'performer_id' => 9, 'director_id' => 2, 'name' => 'name 19', 'note' => 'note note note note note 19', 'status_id' => 4, 'deadline' => '2018-12-30'],
            ['id' => 20, 'roles_id' => 5, 'performer_id' => 9, 'director_id' => 2, 'name' => 'name 20', 'note' => 'note note note note note 20', 'status_id' => 5, 'deadline' => '2018-12-24'],
        ]);
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('tasks')->delete(['id' => 1]);
        DB::table('tasks')->delete(['id' => 2]);
        DB::table('tasks')->delete(['id' => 3]);
        DB::table('tasks')->delete(['id' => 4]);
        DB::table('tasks')->delete(['id' => 5]);
        DB::table('tasks')->delete(['id' => 6]);
        DB::table('tasks')->delete(['id' => 7]);
        DB::table('tasks')->delete(['id' => 8]);
        DB::table('tasks')->delete(['id' => 9]);
        DB::table('tasks')->delete(['id' => 10]);
        DB::table('tasks')->delete(['id' => 11]);
        DB::table('tasks')->delete(['id' => 12]);
        DB::table('tasks')->delete(['id' => 13]);
        DB::table('tasks')->delete(['id' => 14]);
        DB::table('tasks')->delete(['id' => 15]);
        DB::table('tasks')->delete(['id' => 16]);
        DB::table('tasks')->delete(['id' => 17]);
        DB::table('tasks')->delete(['id' => 18]);
        DB::table('tasks')->delete(['id' => 19]);
        DB::table('tasks')->delete(['id' => 20]);
    }
}
