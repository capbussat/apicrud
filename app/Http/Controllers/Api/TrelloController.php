<?php

namespace App\Http\Controllers\Api;
use App\Models\Board;
use App\Models\Trellolist;
use App\Models\Card;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\IsFalse;

class TrelloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cards = Card::orderBy('trellolist_id', 'asc')->orderBy('position', 'asc')->get();
        // tornem dades en json,
        return response()->json(
            [
                'data' => $cards
            ],
            200
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Falta comprovar la darrera posició i posar position
        /* dificil */
        $position = Card::all()->where('trellolist_id', $request->trellolist_id )->max('position') + 1;

        $card = [
            'title'   => $request->title,
            'trellolist_id' => $request->trellolist_id,
            'position'=> $position,
            'content' => $request->content,
        ];

        // dificil
        $createdCard = \App\Models\Card::factory()->create( $card);
        $createdCard->user()->attach( $request->user_id);

        return response()->json([
            'data' => ['Card' => $createdCard],
            ], 
             201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $card = Card::all()->find( $id);

        $card->update($request->all());
        return response()->json([
            'data' => $card
        ], 204);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $card = Card::find($id);
        if ( $card == null )
        return response()->json([
            'message' => 'Not found ' . $id,
            'data' => $id
        ], 200);    

        $card->delete();
        return response()->json([
            'data' => $id
        ], 200);
    }

    
}
