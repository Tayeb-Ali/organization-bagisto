<?php

namespace DOCore\Organization\Database\Seeders;


use DOCore\Organization\Models\TreasureGroup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TreasureGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('org_treasures_groups')->truncate();

        factory(TreasureGroup::class, 20)->create();
    }
}
