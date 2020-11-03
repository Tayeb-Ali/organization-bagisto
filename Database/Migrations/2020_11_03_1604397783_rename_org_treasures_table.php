<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameOrgTreasuresTable extends Migration
{
    public function up()
    {
        Schema::rename('org_treasurs', 'org_treasures');
        Schema::rename('org_treasurs_groups', 'org_treasures_groups');
        Schema::table('org_treasures', function (Blueprint $table) {
            $table->unsignedInteger('employ_id')->nullable();
            $table->dropColumn('casher');
        });
        }
    }