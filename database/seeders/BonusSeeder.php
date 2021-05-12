<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BonusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bonuses')->insert(
            [
                'title' => 'survey',
                'amount' => 3,
            ],
            [
                'title' => 'sanatorium',
            ],
            [
                'title' => 'cup',
                'amount' => 3,
            ]
        );
    }
}
