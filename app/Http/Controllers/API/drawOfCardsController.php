<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\API\drawCardsModel;

class drawOfCardsController extends Controller
{
    public function drawOfCards(Request $request){
        $deckId = $request->input('deckId');
        $count  = $request->input('count');

        $drawCards = new drawCardsModel();
        $drawCards = $drawCards->drawCards($deckId, $count);
        
        if($drawCards){
            return $drawCards; //response($drawCards, 200);
        }else{
            return response("Falha na requisição", 404);
        }
        

    }
}
