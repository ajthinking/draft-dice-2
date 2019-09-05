<?php

namespace App\Http\Controllers;

use App\Game;
use App\Http\Resources\GameCollection;
use App\Http\Resources\GameResource;
 
class GameAPIController extends Controller
{
    public function index()
    {
        return new GameCollection(Game::paginate());
    }
 
    public function show(Game $game)
    {
        return new GameResource($game->load(['diceThrows', 'players']));
    }

    public function store(Request $request)
    {
        return new GameResource(Game::create($request->all()));
    }

    public function update(Request $request, Game $game)
    {
        $game->update($request->all());

        return new GameResource($game);
    }

    public function destroy(Request $request, Game $game)
    {
        $game->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}