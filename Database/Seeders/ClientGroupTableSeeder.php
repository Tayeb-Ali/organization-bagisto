<?php

use DOCore\Organization\Models\ClientGroup;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
