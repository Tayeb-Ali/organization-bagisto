<?php

namespace DOCore\Organization\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class OrganizationDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call([
            CompanyTableSeeder::class,
            CompanyBranchTableSeeder::class,
            ClientGroupTableSeeder::class,
            ClientTableSeeder::class,
            SupplierGroupTableSeeder::class,
            SupplierTableSeeder::class,
            EmployGroupTableSeeder::class,
            EmployTableSeeder::class,
            BankGroupTableSeeder::class,
            BanckTableSeeder::class,
            StoreGroupTableSeeder::class,
            StoreTableSeeder::class,
            TreasureGroupTableSeeder::class,
            TreasureTableSeeder::class
        ]);
    }
}
