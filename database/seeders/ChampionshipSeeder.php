<?php

namespace Database\Seeders;

use App\Models\Championships;
use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChampionshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Championships::factory()
            ->hasAttached(Team::factory()->hasPlayers(5)->count(5), ['score' => random_int(0, 20)])
            ->create();
    }
}
