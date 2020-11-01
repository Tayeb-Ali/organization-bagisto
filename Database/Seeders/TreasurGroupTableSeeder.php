<?php

namespace DOCore\Organization\Database\Seeders;


use DOCore\Organization\Models\TreasurGroup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TreasurGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('erp_treasurs_groups')->truncate();

        factory(TreasurGroup::class, 20)->create();
    }
}
