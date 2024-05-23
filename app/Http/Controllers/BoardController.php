<?php

namespace App\Http\Controllers;
use App\Models\Board;
use App\Models\Trellolist;
use App\Models\Card;

use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function show( $board_id = 1){
        
        
        $board = Board::findOrfail( $board_id);
        $lists =  $board->trellolists()->get();
        
        foreach ( $lists as $key => $list) {
            $temp_cards = $list->cards()->get();
            foreach ($temp_cards as $temp_card){
                $cards[] = $temp_card;  // bunyol, després cal escollir segons a quina Trellolist pertany
            }
         }
        // dd( $cards);
        return view('board', compact('board','lists','cards'));

        
    }
}
