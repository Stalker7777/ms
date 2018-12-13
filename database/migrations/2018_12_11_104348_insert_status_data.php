<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertStatusData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('status')->insert([
            ['id' => 1, 'name' => 'status 1'],
            ['id' => 2, 'name' => 'status 2'],
            ['id' => 3, 'name' => 'status 3'],
            ['id' => 4, 'name' => 'status 4'],
            ['id' => 5, 'name' => 'status 5'],
        ]);
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('status')->delete(['id' => 1]);
        DB::table('status')->delete(['id' => 2]);
        DB::table('status')->delete(['id' => 3]);
        DB::table('status')->delete(['id' => 4]);
        DB::table('status')->delete(['id' => 5]);
    }
}
