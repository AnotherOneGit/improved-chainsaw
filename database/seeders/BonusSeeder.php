<?php

namespace Database\Seeders;

use App\Models\Bonus;
use Illuminate\Database\Seeder;

class BonusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bonuses = [
            ['title' => 'survey', 'amount' => 3],
            ['title' => 'sanatorium'],
            ['title' => 'cup', 'amount' => 5]];
        foreach ($bonuses as $bonus) {
            Bonus::create($bonus);
        }
    }
}
