<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\curlModel;

class drawCardsModel extends Model
{
    private $urlDrawCards = "https://deckofcardsapi.com/api/deck/deck_id/draw/?count=9999";

    public function drawCards($deckId, $numberToPraziDraw){

        $url = str_replace(["deck_id","9999"],[$deckId, $numberToPraziDraw], $this->urlDrawCards);
        $arr=[];
        //$return = file_get_contents($url);
        $curlCall = new curlModel();
        $curlCall = $curlCall-> callCurl($url);

        return $curlCall;



    }
}
