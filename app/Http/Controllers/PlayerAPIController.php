<?php

namespace App\Http\Controllers;

use App\Player;
use App\Http\Resources\PlayerCollection;
use App\Http\Resources\PlayerResource;
 
class PlayerAPIController extends Controller
{
    public function index()
    {
        return new PlayerCollection(Player::paginate());
    }
 
    public function show(Player $player)
    {
        return new PlayerResource($player->load(['diceThrows', 'games']));
    }

    public function store(Request $request)
    {
        return new PlayerResource(Player::create($request->all()));
    }

    public function update(Request $request, Player $player)
    {
        $player->update($request->all());

        return new PlayerResource($player);
    }

    public function destroy(Request $request, Player $player)
    {
        $player->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}