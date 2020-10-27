<?php

namespace DOCore\Organization\Database\Seeders;

use DOCore\Organization\Models\Bank;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BanckTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('org_banks')->truncate();

        factory(Bank::class, 200)->create();
    }
}
