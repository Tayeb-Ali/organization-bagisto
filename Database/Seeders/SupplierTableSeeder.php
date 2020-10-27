<?php

namespace DOCore\Organization\Database\Seeders;

use DOCore\Organization\Models\Supplier;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('org_suppliers')->truncate();

        factory(Supplier::class, 100)->create();
    }
}
