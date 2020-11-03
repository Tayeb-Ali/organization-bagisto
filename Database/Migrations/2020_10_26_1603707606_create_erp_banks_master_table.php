<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateErpBanksMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('org_banks', function (Blueprint $table) {

            $table->increments('code');
            $table->string('name', 100)->nullable();
            $table->string('name_o', 100)->nullable();
            $table->string('bank_name', 10)->nullable();
            $table->string('currency', 10)->nullable();
            $table->string('account_type', 10)->nullable();
            $table->string('account_no', 100)->nullable();
            $table->string('contact_person', 100)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('fax', 20)->nullable();
            $table->string('pobox', 30)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('bank_group', 10)->nullable();
            $table->string('status', 1)->nullable();
$table->string('credit_limit', 10)->nullable();
            $table->decimal('begin_bal_credit', 15, 4)->nullable();
            $table->decimal('begin_bal_debit', 15, 4)->nullable();
            $table->decimal('curr_bal_credit', 15, 4)->nullable();
            $table->decimal('curr_bal_debit', 15, 4)->nullable();
            $table->string('amend_by', 10)->nullable();
            $table->datetime('amend_date')->nullable();
            $table->string('account_code', 20)->nullable();
            $table->datetime('last_trns_date')->nullable();
            $table->decimal('last_trns_value', 13, 3)->nullable();
            $table->string('last_trns_type', 100)->nullable();
            $table->decimal('begin_bal_credit_fc', 15, 5)->nullable();
            $table->decimal('begin_bal_debit_fc', 15, 5)->nullable();
            $table->decimal('curr_bal_credit_fc', 15, 5)->nullable();
            $table->decimal('curr_bal_debit_fc', 15, 5)->nullable();
            $table->string('analysis_code', 20)->nullable();
            $table->unsignedInteger('company_id')->nullable();
            $table->unsignedInteger('group_id')->nullable();
            $table->timestamps();

            /*$table->foreign('company_id')->references('company_id')->on('companies');
            $table->foreign('group_id')->references('group_id')->on('bank_groups');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('org_banks');
    }
}
