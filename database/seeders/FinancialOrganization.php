<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Str;

class FinancialOrganization extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('financial_organizations')->insert([
            'name' => Str::random(10),
            'short_name' => Str::random(10),
            'address' => Str::random(10),
        ]);
         DB::table('financial_organizations')->insert([
            'name' => Str::random(10),
            'short_name' => Str::random(10),
            'address' => Str::random(10),
        ]);
         DB::table('financial_organizations')->insert([
            'name' => Str::random(10),
            'short_name' => Str::random(10),
            'address' => Str::random(10),
        ]);
    }
}





