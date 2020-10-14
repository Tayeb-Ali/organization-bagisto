<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_branches', function (Blueprint $table) {
            $table->increments('branch_id');
            $table->integer('company_id')->unsigned();
            $table->string('short_desc', 25)->nullable();
            $table->string('description', 100)->nullable();
            $table->string('branch_country', 60)->nullable();
            $table->smallInteger('branch_weight')->nullable();
            $table->string('branch_manager', 100)->nullable();
            $table->string('currency', 10)->nullable();
            $table->string('status', 10)->nullable();
            $table->string('amend_by', 10)->nullable();
            $table->dateTime('amend_date')->nullable();
            $table->string('phone', 18)->nullable();
            $table->string('fax', 18)->nullable();
            $table->string('email', 40)->nullable();
            $table->string('cost_center', 30)->nullable();
            $table->string('ship_to_address', 50)->nullable();
            $table->string('ship_to_phone', 50)->nullable();
            $table->string('ship_to_fax', 50)->nullable();
            $table->string('ship_to_city', 50)->nullable();
            $table->string('ship_to_country', 50)->nullable();
            $table->string('bill_to_address', 50)->nullable();
            $table->string('bill_to_phone', 50)->nullable();
            $table->string('bill_to_fax', 50)->nullable();
            $table->string('bill_to_city', 50)->nullable();
            $table->string('bill_to_country', 50)->nullable();
            $table->foreign('company_id')->references('company_id')->on('companies')->onDelete('cascade');
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
        Schema::drop('company_branches');
    }
}
