<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateErpStoresGroupsTable extends Migration
{
    public function up()
    {
        Schema::create('org_stores_groups', function (Blueprint $table) {

            $table->increments('group_id');
            $table->string('group_desc', 100)->nullable();
            $table->string('cost_center_code', 30)->nullable();
            $table->string('status', 1)->nullable();
            $table->string('amend_by', 10)->nullable();
            $table->datetime('amend_date')->nullable();
            $table->unsignedInteger('company_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('org_stores_groups');
    }
}