<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteUnUsedTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('org_client_groups');
        Schema::dropIfExists('org_supplier_groups');
        Schema::dropIfExists('org_employee_groups');
        Schema::dropIfExists('org_bank_groups');
        Schema::dropIfExists('org_stores_groups');
        Schema::dropIfExists('org_treasures_groups');
    }

    public function down()
    {
    }
}