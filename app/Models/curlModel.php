<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curlModel extends Model
{
    //use HasFactory;
    public function callCurl($servico){

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $servico);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);

        $retorno = json_decode($output);

        if($info['http_code']== 404 && !$retorno){
            return  "Falha na requisição. Verifique a URL";
        }
        else if ($retorno){
            if($retorno->success === false){
                return $retorno->error;
            }else{
                return $retorno;
            }
        }
    }
}
