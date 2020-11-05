<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    public function up()
    {
        Schema::create('org_groups', function (Blueprint $table) {
            $table->increments('group_id');
            $table->unsignedInteger('company_id')->unsigned();
            $table->string('group_desc', 100);
            $table->string('account_code', 30)->nullable();
            $table->string('status', 1);
            $table->string('amend_by', 10)->nullable();
            $table->string('cost_center_code', 30)->nullable();
            $table->dateTime('amend_date')->nullable();
            $table->string('model_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('org_groups');
    }
}