<?php

namespace DOCore\Organization\Database\Seeders;


use DOCore\Organization\Models\Group;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('org_groups')->truncate();

        factory(Group::class, 200)->create();
    }
}
