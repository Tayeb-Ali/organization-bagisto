<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateErpStoresTable extends Migration
{
    public function up()
    {
        Schema::create('erp_stores', function (Blueprint $table) {

            $table->increments('store_id');
            $table->string('company_code', 10);
            $table->string('code', 10);
            $table->string('description', 100)->nullable();
            $table->string('name_o', 100)->nullable();
            $table->string('store_keeper', 100)->nullable();
//            $table->string('store_group', 10)->nullable();
            $table->string('status', 10)->nullable();
            $table->string('amend_by', 10)->nullable();
            $table->datetime('amend_date')->nullable();
            $table->datetime('last_trns_date')->nullable();
            $table->decimal('last_trns_value', 13, 3)->nullable();
            $table->string('last_trns_type', 100)->nullable();
            $table->string('cost_center_code', 30)->nullable();
            $table->string('have_sub_stores', 1)->nullable();
            $table->string('store_contacts', 50)->nullable();
            $table->string('store_location', 500)->nullable();
            $table->tinyinteger('sub_store_mandatory')->nullable();
            $table->string('account_code', 30)->nullable();
            $table->string('dept_code', 10)->nullable();
            $table->unsignedInteger('company_id')->nullable();
            $table->unsignedInteger('group_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('erp_stores');
    }
}