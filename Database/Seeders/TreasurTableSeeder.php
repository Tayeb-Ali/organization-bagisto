<?php

namespace DOCore\Organization\Database\Seeders;


use DOCore\Organization\Models\Treasur;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TreasurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('erp_treasurs')->truncate();

        factory(Treasur::class, 20)->create();
    }
}
