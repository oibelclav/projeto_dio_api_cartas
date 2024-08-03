<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\curlModel;

class reshufflerDeckModel extends Model
{
    private $urlReshuflleAll = "https://deckofcardsapi.com/api/deck/deck_id/shuffle/";
    private $urlReshuflleDeck= "https://deckofcardsapi.com/api/deck/deck_id/shuffle/?remaining=simNao";

    public function reshuflle($deckID, $currentDeck){

        $url = "";
      
        if(empty($currentDeck)){
            $url = $this-> urlReshuflleAll;
            $url = str_replace("deck_id",$deckID, $url);
            //return $url;
        }else{
            if($currentDeck > 1){
                return "Para embaralhar apenas o deck, gentileza informar 1. Agora, se quiser embaralhar tudo, incluindo a pilha, informar 0.";
                exit;
            }
            $url = $this-> urlReshuflleDeck;
            $url = str_replace(["deck_id","simNao"],[$deckID, $currentDeck, ], $url);
            //return $url;
        }

        //
        $curlCall = new curlModel();
        $curlCall = $curlCall-> callCurl($url);  
        return $curlCall;

    }
}
