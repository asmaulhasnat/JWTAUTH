<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            'user_type' =>'admin',
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'user@user.com',
            'password' => Hash::make('12345678'),
            'user_type' =>'user',
        ]);		 
    }
}





