<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_groups', function (Blueprint $table){
            $table->increments('group_id');
            $table->integer('company_id')->unsigned();
            $table->string('group_desc', 100)->nullable();
            $table->string('account_code', 30)->nullable();
            $table->string('status', 10)->nullable();
            $table->string('amend_by', 10)->nullable();
            $table->dateTime('amend_date')->nullable();
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
        Schema::drop('supplier_groups');
    }
}
