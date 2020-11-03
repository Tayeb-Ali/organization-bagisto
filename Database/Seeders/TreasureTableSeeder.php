<?php

namespace DOCore\Organization\Database\Seeders;


use DOCore\Organization\Models\Treasure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TreasureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('org_treasures')->truncate();

        factory(Treasure::class, 20)->create();
    }
}
