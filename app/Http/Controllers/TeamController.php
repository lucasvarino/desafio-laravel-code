<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        $teams = Team::all();

        return view('teams.index', compact('teams'));
    }

    public function show(int $id)
    {
        $team = Team::findOrFail($id);
        $players = $team->players;
        $championships = $team->championships;

        return view('teams.team', compact('team', 'players', 'championships'));
    }
}
