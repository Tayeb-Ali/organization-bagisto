<?php

namespace DOCore\Organization\Database\Seeders;


use DOCore\Organization\Models\StoreGroup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('org_stores_groups')->truncate();

        factory(StoreGroup::class, 20)->create();
    }
}
