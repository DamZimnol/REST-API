<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 50; $i++)
        {
            DB::table('people')->insert([
                'name'=> Str::random(12),
                'surname'=> Str::random(25),
                'age'=> rand(0,99),
                'telephone number'=> rand(1000000,999999999),
                'street'=> Str::random(25),
                'town'=> Str::random(25),
                'country'=> Str::random(25)
            ]);
        }
    }
}
