<?php

namespace DOCore\Organization\Database\Seeders;


use DOCore\Organization\Models\ClientGroup;
use Illuminate\Database\Seeder;

class ClientGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ClientGroup::class, 20)->create();
    }
}
