<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

/**
 * Método responsavel pela consulta no site ViaCep
 * @param string $cep
 * @retun array
 */


 public static function buscarOcep($cep){
    //cama o CURL
    $curl =curl_init();

    ///CONIGURAR O REQUEST
    curl_setopt_array($curl,[
        CURLOPT_URL =>'https://viacep.com.br/ws/'.$cep.'/json/',
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_CUSTOMREQUEST => 'GET'
    ]);

     ///EFETUAR O REQUEST
     $response = curl_exec($curl);
     curl_close($curl);
     ///convertert para array
     $array = json_decode($response,true);

     return  isset($array['cep']) ? $array :null ;

 }

}
