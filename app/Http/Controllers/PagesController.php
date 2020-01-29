<?php

namespace App\Http\Controllers;

use App\Developper;
use App\Game;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function games() {

        //$games = DB::table('games')->get();
        $games = Game::get();

        return view('pages.games', [
            'games' => $games
        ]);
    }

    public function developpers() {
        $developpers = Developper::with('games.platforms')
            ->whereHas('games.platforms', function($q) {
                return $q->where('name', 'PC');
            })
            ->get();
        return view('pages.developpers', [
            'developpers' => $developpers
        ]);
    }

    public function users() {
        $users = User::paginate(10);

        return view('pages.users', [
            'users' => $users,
        ]);
    }
}
