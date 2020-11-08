<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateGroupTable extends Migration
{
    public function up()
    {
        Schema::table('org_groups', function (Blueprint $table) {
            $table->boolean('have_child')->default(0);
        });
    }

    public function down()
    {
    }
}