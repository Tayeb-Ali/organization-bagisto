<?php

namespace DOCore\Organization\Database\Seeders;


use DOCore\Organization\Models\BankGroup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('org_bank_groups')->truncate();

        factory(BankGroup::class, 20)->create();
    }
}
