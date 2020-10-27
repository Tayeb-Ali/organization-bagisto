<?php

namespace DOCore\Organization\Database\Seeders;

use DOCore\Organization\Models\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('org_clients')->truncate();

        factory(Client::class, 1000)->create();
    }
}
