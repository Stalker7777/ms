<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertRolesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('roles')->insert([
            ['id' => 1, 'name' => 'ROLE 1'],
            ['id' => 2, 'name' => 'ROLE 2'],
            ['id' => 3, 'name' => 'ROLE 3'],
            ['id' => 4, 'name' => 'ROLE 4'],
            ['id' => 5, 'name' => 'ROLE 5'],
        ]);
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('roles')->delete(['id' => 1]);
        DB::table('roles')->delete(['id' => 2]);
        DB::table('roles')->delete(['id' => 3]);
        DB::table('roles')->delete(['id' => 4]);
        DB::table('roles')->delete(['id' => 5]);
    }
}
