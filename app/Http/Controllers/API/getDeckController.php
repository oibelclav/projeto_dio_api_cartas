<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\API\getDeckModel;

class getDeckController extends Controller
{
    
    public function getDeck(){

        $getDeckModel = new getDeckModel();
        $getDeckModel = $getDeckModel->getDeckAPI();

        return $getDeckModel;

    }
}
