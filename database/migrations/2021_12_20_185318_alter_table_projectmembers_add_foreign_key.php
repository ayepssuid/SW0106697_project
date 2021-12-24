php artisan make:migration alter_table_projectmembers_add_foreign_key

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableProjectmembersAddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('project_members', function (Blueprint $table) {
        $table->bigInteger('userid')->unsigned()->index()->nullable();
        $table->foreign('userid')->references('id')->on('users');
        });
        
        Schema::table('project_members', function (Blueprint $table) {
        $table->bigInteger('pmanager')->unsigned()->index()->nullable();
        $table->foreign('pmanager')->references('id')->on('project_managers');
        });

        Schema::table('project_members', function (Blueprint $table) {
        $table->bigInteger('pleader')->unsigned()->index()->nullable();
        $table->foreign('pleader')->references('id')->on('project_leaders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_members', function (Blueprint $table) {
            $table->dropForeign('userid');
            $table->dropColumn('userid');
            });

        Schema::table('project_members', function (Blueprint $table) {
            $table->dropForeign('pmanager');
            $table->dropColumn('pmanager');
            });

        Schema::table('project_members', function (Blueprint $table) {
            $table->dropForeign('pleader');
            $table->dropColumn('pleader');
            });
    }
}


