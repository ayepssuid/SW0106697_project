<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableProjectmanagersAddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('project_managers', function (Blueprint $table) {
            $table->bigInteger('userid')->unsigned()->index()->nullable();
            $table->foreign('userid')->references('id')->on('users');
            });
        
        Schema::table('project_managers', function (Blueprint $table) {
            $table->bigInteger('project_id')->unsigned()->index()->nullable();
            $table->foreign('project_id')->references('id')->on('projects');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_managers', function (Blueprint $table) {
            $table->dropForeign('userid');
            $table->dropColumn('userid');
            });

        Schema::table('project_managers', function (Blueprint $table) {
            $table->dropForeign('project_id');
            $table->dropColumn('project_id');
            });
    }
}
