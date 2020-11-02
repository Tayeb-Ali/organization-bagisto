<?php

namespace DOCore\Organization\Database\Seeders;


use DOCore\Organization\Models\Store;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('org_stores')->truncate();

        factory(Store::class, 20)->create();
    }
}
