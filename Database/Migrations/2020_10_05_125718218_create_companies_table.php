<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table){
            $table->increments('company_id');
            $table->string('description', 100)->nullable();
            $table->string('currency', 10)->nullable();
            $table->string('status', 10)->nullable();
            $table->tinyInteger('gl_ac_levels')->nullable();
            $table->tinyInteger('gl_ac_level_1_len')->nullable();
            $table->tinyInteger('gl_ac_level_2_len')->nullable();
            $table->tinyInteger('gl_ac_level_3_len')->nullable();
            $table->tinyInteger('gl_ac_level_4_len')->nullable();
            $table->tinyInteger('gl_ac_level_5_len')->nullable();
            $table->tinyInteger('gl_ac_level_6_len')->nullable();
            $table->tinyInteger('gl_ac_level_7_len')->nullable();
            $table->tinyInteger('gl_ac_level_8_len')->nullable();
            $table->tinyInteger('gl_ac_level_9_len')->nullable();
            $table->tinyInteger('gl_ac_level_0_len')->nullable();
            $table->tinyInteger('gl_cc_levels')->nullable();
            $table->tinyInteger('gl_cc_level_0_len')->nullable();
            $table->tinyInteger('gl_cc_level_1_len')->nullable();
            $table->tinyInteger('gl_cc_level_2_len')->nullable();
            $table->tinyInteger('gl_cc_level_3_len')->nullable();
            $table->tinyInteger('gl_cc_level_4_len')->nullable();
            $table->tinyInteger('gl_cc_level_5_len')->nullable();
            $table->tinyInteger('gl_cc_level_6_len')->nullable();
            $table->tinyInteger('gl_cc_level_7_len')->nullable();
            $table->tinyInteger('gl_cc_level_8_len')->nullable();
            $table->tinyInteger('gl_cc_level_9_len')->nullable();
            $table->tinyInteger('gl_cc_level_10_len')->nullable();
            $table->bigInteger('cust_code_len')->nullable();
            $table->bigInteger('supp_code_len')->nullable();
            $table->bigInteger('bank_code_len')->nullable();
            $table->bigInteger('trea_code_len')->nullable();
            $table->bigInteger('stor_code_len')->nullable();
            $table->bigInteger('srep_code_len')->nullable();
            $table->bigInteger('expe_code_len')->nullable();
            $table->string('amend_by', 10)->nullable();
            $table->dateTime('amend_date')->nullable();
            $table->string('web', 40)->nullable();
            $table->tinyInteger('asset_code_len')->nullable();
            $table->tinyInteger('locat_code_len')->nullable();
            $table->tinyInteger('product_code_len')->nullable();
            $table->tinyInteger('product_batch_len')->nullable();
            $table->tinyInteger('users_code_len')->nullable();
            $table->tinyInteger('sub_cust_code_len')->nullable();
            $table->tinyInteger('sub_store_code_len')->nullable();
            $table->string('curr_fin_year', 4)->nullable();
            $table->tinyInteger('company_type')->nullable();
            $table->decimal('local_partner_percent', 6, 3)->nullable();
            $table->string('zakah_tax_formula', 250)->nullable();
            $table->string('cust_code_type', 1)->nullable();
            $table->string('supp_code_type', 1)->nullable();
            $table->string('bank_code_type', 1)->nullable();
            $table->string('trea_code_type', 1)->nullable();
            $table->string('stor_code_type', 1)->nullable();
            $table->string('srep_code_type', 1)->nullable();
            $table->string('expe_code_type', 1)->nullable();
            $table->string('asset_code_type', 1)->nullable();
            $table->string('locat_code_type', 1)->nullable();
            $table->string('product_code_type', 1)->nullable();
            $table->string('product_batch_type', 1)->nullable();
            $table->string('users_code_type', 1)->nullable();
            $table->string('sub_cust_code_type', 1)->nullable();
            $table->string('sub_store_code_type', 1)->nullable();
            $table->string('short_desc', 25)->nullable();
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
        Schema::drop('companies');
    }
}
