<?php

namespace DOCore\Organization\Database\Seeders;

use DOCore\Organization\Models\SupplierGroup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('org_supplier_groups')->truncate();

        factory(SupplierGroup::class, 10)->create();
    }
}
