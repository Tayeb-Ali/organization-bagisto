<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAllTable extends Migration
{
    public function up()
    {
        Schema::table('org_groups', function (Blueprint $table) {
            $table->dropColumn('amend_date');
        });
        Schema::table('org_treasures', function (Blueprint $table) {
            $table->dropColumn('amend_date');
            $table->unsignedInteger('company_branch_id');
        });
        Schema::table('org_suppliers', function (Blueprint $table) {
            $table->dropColumn('amend_date');
            $table->unsignedInteger('company_branch_id');
        });
        Schema::table('org_company_branches', function (Blueprint $table) {
            $table->dropColumn('amend_date');
        });
        Schema::table('org_companies', function (Blueprint $table) {
            $table->dropColumn('amend_date');
        });
        Schema::table('org_clients', function (Blueprint $table) {
            $table->dropColumn('amend_date');
            $table->unsignedInteger('company_branch_id');
        });
        Schema::table('org_employees', function (Blueprint $table) {
            $table->dropColumn('amend_date');
            $table->unsignedInteger('company_branch_id');
        });
        Schema::table('org_banks', function (Blueprint $table) {
            $table->dropColumn('amend_date');
            $table->unsignedInteger('company_branch_id');
        });
        Schema::table('org_stores', function (Blueprint $table) {
            $table->dropColumn('amend_date');
            $table->unsignedInteger('company_branch_id');

        });


    }

    public function down()
    {
    }
}