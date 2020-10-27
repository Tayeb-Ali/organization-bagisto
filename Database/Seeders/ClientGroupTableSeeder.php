<?php

namespace DOCore\Organization\Database\Seeders;


use DOCore\Organization\Models\ClientGroup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('org_client_groups')->truncate();

        factory(ClientGroup::class, 10)->create();
    }
}
