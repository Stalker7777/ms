<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertUsersData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert([
            ['id' => 1, 'fio' => 'user 1', 'roles_id' => 1],
            ['id' => 2, 'fio' => 'user 2', 'roles_id' => 2],
            ['id' => 3, 'fio' => 'user 3', 'roles_id' => 3],
            ['id' => 4, 'fio' => 'user 4', 'roles_id' => 4],
            ['id' => 5, 'fio' => 'user 5', 'roles_id' => 5],
            ['id' => 6, 'fio' => 'user 6', 'roles_id' => 1],
            ['id' => 7, 'fio' => 'user 7', 'roles_id' => 2],
            ['id' => 8, 'fio' => 'user 8', 'roles_id' => 3],
            ['id' => 9, 'fio' => 'user 9', 'roles_id' => 4],
            ['id' => 10, 'fio' => 'user 10', 'roles_id' => 5],
        ]);
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('users')->delete(['id' => 1]);
        DB::table('users')->delete(['id' => 2]);
        DB::table('users')->delete(['id' => 3]);
        DB::table('users')->delete(['id' => 4]);
        DB::table('users')->delete(['id' => 5]);
        DB::table('users')->delete(['id' => 6]);
        DB::table('users')->delete(['id' => 7]);
        DB::table('users')->delete(['id' => 8]);
        DB::table('users')->delete(['id' => 9]);
        DB::table('users')->delete(['id' => 10]);
    }
}
