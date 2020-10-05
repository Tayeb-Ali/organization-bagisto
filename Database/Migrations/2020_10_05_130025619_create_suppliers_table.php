<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table){
            $table->increments('client_id');
            $table->integer('company_id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->string('supp_type', 10)->nullable();
            $table->string('name', 100)->nullable();
            $table->string('contact_person', 100)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('fax', 20)->nullable();
            $table->string('pobox', 30)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('address', 150)->nullable();
            $table->string('have_branch', 10)->nullable();
            $table->string('status', 10)->nullable();
            $table->decimal('credit_limit', 15, 4)->nullable();
            $table->decimal('begin_bal_credit', 15, 4)->nullable();
            $table->decimal('begin_bal_debit', 15, 4)->nullable();
            $table->decimal('curr_bal_credit', 15, 4)->nullable();
            $table->decimal('curr_bal_debit', 15, 4)->nullable();
            $table->string('amend_by', 10)->nullable();
            $table->dateTime('amend_date')->nullable();
            $table->string('account_code', 20)->nullable();
            $table->dateTime('last_trns_date')->nullable();
            $table->decimal('last_trns_value', 13, 3)->nullable();
            $table->string('last_trns_type', 100)->nullable();
            $table->string('currency_code', 10)->nullable();
            $table->string('zip_code', 10)->nullable();
            $table->decimal('begin_bal_credit_fc', 15, 5)->nullable();
            $table->decimal('begin_bal_debit_fc', 15, 5)->nullable();
            $table->decimal('curr_bal_credit_fc', 15, 5)->nullable();
            $table->decimal('curr_bal_debit_fc', 15, 5)->nullable();
            $table->smallInteger('allowance_days')->nullable();
            $table->string('analysis_code', 20)->nullable();
            $table->char('active_flag')->nullable();
            $table->double('vat_flag')->nullable();
            $table->string('mship_to_address', 100)->nullable();
            $table->string('mship_to_phone', 30)->nullable();
            $table->string('mship_to_fax', 30)->nullable();
            $table->string('mship_to_city', 50)->nullable();
            $table->string('mship_to_pobox', 20)->nullable();
            $table->string('billing_contact_person', 20)->nullable();
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('suppliers');
    }
}
