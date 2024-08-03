<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\curlModel;

class getDeckModel extends Model
{
    //use HasFactory;

    private $urlGetDeck = "https://deckofcardsapi.com/api/deck/new/";

    public function getDeckAPI(){

        $url = $this->urlGetDeck;

        //$return = file_get_contents($this->urlGetDeck);
        $curlCall = new curlModel();
        $curlCall = $curlCall-> callCurl($url);   
       
        return $curlCall;     
        
    }
}
