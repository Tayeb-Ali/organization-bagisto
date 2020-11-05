<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateErpStoresTable extends Migration
{
    public function up()
    {
        Schema::create('org_stores', function (Blueprint $table) {

            $table->increments('store_id');
            $table->string('description', 100)->nullable();
            $table->string('store_keeper', 100)->nullable();
            $table->string('status', 1)->nullable();
            $table->string('amend_by', 10)->nullable();
            $table->datetime('amend_date')->nullable();
            $table->datetime('last_trns_date')->nullable();
            $table->decimal('last_trns_value', 13, 3)->nullable();
            $table->string('last_trns_type', 100)->nullable();
            $table->string('cost_center_code', 30)->nullable();
            $table->boolean('have_sub_stores')->nullable();
            $table->string('store_contacts', 50)->nullable();
            $table->string('store_location', 500)->nullable();
            $table->tinyinteger('sub_store_mandatory')->nullable();
            $table->string('account_code', 30)->nullable();
            $table->string('dept_code', 10)->nullable();
            $table->unsignedInteger('company_id')->nullable();
            $table->unsignedInteger('group_id')->nullable();
            $table->integer('company_branch_id')->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('org_stores');
    }
}