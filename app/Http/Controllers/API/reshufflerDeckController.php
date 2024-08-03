<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\API\reshufflerDeckModel;

class reshufflerDeckController extends Controller
{
//string $deckId, string $currentDeck,
    public function reshufflerDeck( Request $request){
        $deckId = $request->input('deckId');
        $currentDeck = $request->input('reshuffleDeck');
        $reshuffle = new reshufflerDeckModel();
        $reshuffle = $reshuffle->reshuflle($deckId, $currentDeck);

        return $reshuffle;
        
        // dd($reshuffle);
    }
    
}
