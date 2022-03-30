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
        dd($teams);
        return view('teams.index', compact('teams'));
    }
}
