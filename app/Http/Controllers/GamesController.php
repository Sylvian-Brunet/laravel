<?php

namespace App\Http\Controllers;

use App\Developper;
use App\Game;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function getGame($id) {
        $game = Game::findOrFail($id);

        return view('pages.game_details', [
           'game' => $game
        ]);
    }

    public function addGame() {
        return view('pages.game_add', [
            'developpers' => Developper::get()
        ]);
    }

    public function postAddGame(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'pegi' => 'numeric',
            'physical_release'=> 'boolean',
            'developper_id' => 'required|exists:developpers,id'
        ]);

        /*
        $game->platforms()->attach([2,3]); // detach | sync

        $developper = Developper::find($request->input('developper_id');
        $game->developper()->associate($developper);
        */

        /*
        3 METHODES DE D'INSERTION EN BD

        $game = new Game();
        $game->fill($request->all());
        $game->save();

        $game = new Game();
        $game->name = $request->input('name');
        $game->pegi = $request->input('pegi');
        $game->developper_id = $request->input('developper_id');
        $game->physical_release = $request->filled('physical_release');
        $game->save();
        */

        $game = Game::create($request->all());

        return redirect()->back();
    }
}
