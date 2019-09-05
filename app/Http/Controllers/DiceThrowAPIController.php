<?php

namespace App\Http\Controllers;

use App\DiceThrow;
use App\Http\Resources\DiceThrowCollection;
use App\Http\Resources\DiceThrowResource;
 
class DiceThrowAPIController extends Controller
{
    public function index()
    {
        return new DiceThrowCollection(DiceThrow::paginate());
    }
 
    public function show(DiceThrow $diceThrow)
    {
        return new DiceThrowResource($diceThrow->load(['player', 'game']));
    }

    public function store(Request $request)
    {
        return new DiceThrowResource(DiceThrow::create($request->all()));
    }

    public function update(Request $request, DiceThrow $diceThrow)
    {
        $diceThrow->update($request->all());

        return new DiceThrowResource($diceThrow);
    }

    public function destroy(Request $request, DiceThrow $diceThrow)
    {
        $diceThrow->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}