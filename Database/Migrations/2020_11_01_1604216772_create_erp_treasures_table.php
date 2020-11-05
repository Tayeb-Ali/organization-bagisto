<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateErpTreasuresTable extends Migration
{
    public function up()
    {
        Schema::create('org_treasures', function (Blueprint $table) {
            $table->increments('treasur_id');
            $table->string('name', 100)->nullable();
            $table->string('casher', 100)->nullable();
            $table->string('status', 1)->nullable();
            $table->decimal('begin_bal_credit', 15, 4)->nullable();
            $table->decimal('begin_bal_debit', 15, 4)->nullable();
            $table->decimal('curr_bal_credit', 15, 4)->nullable();
            $table->decimal('curr_bal_debit', 15, 4)->nullable();
            $table->string('amend_by', 10)->nullable();
            $table->datetime('amend_date')->nullable();
            $table->datetime('last_trns_date')->nullable();
            $table->decimal('last_trns_value', 13, 3)->nullable();
            $table->string('last_trns_type', 100)->nullable();
            $table->decimal('begin_bal_credit_fc', 15, 5)->nullable();
            $table->decimal('begin_bal_debit_fc', 15, 5)->nullable();
            $table->decimal('curr_bal_credit_fc', 15, 5)->nullable();
            $table->decimal('curr_bal_debit_fc', 15, 5)->nullable();
            $table->string('currency_code', 10)->nullable();
            $table->unsignedInteger('employ_id')->nullable();
            $table->string('analysis_code', 20)->nullable();
            $table->string('treasure_dept_code', 100)->nullable();
            $table->unsignedInteger('company_id')->nullable();
            $table->unsignedInteger('group_id')->nullable();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('org_treasurs');
    }
}