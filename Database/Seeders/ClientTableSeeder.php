<?php

namespace DOCore\Organization\Database\Seeders;

use DOCore\Organization\Models\Client;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Client::class, 20)->create();
    }
}
