<?php

namespace App\Http\Controllers;

use App\ConsultaCep;
use Illuminate\Http\Request;

class ConsultaCepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            "message" => "Parametro CEP Obrigatório : EX /search/local/01001‑000"
          ], 404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ConsultaCep  $consultaCep
     * @return \Illuminate\Http\Response
     */
    public function show($consultaCep)
    {
        ///recebe todos os CEP divididos por ","
    $array_cep = explode(",",$consultaCep);

    ///RECEBE OS RESULTADOS
    for ($i=0; $i < count($array_cep) ; $i++) {
        $cp= Controller::buscarOcep($array_cep[$i]);

        ////TRATAMENTO DE ERRO
        if( $cp == null){
            $view_cep[]= ["message" => "CEP Invalido! verifique e tente novamente"];
        }else{
            $view_cep[] = $cp;
        }

    }

      return $view_cep ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ConsultaCep  $consultaCep
     * @return \Illuminate\Http\Response
     */
    public function edit(ConsultaCep $consultaCep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ConsultaCep  $consultaCep
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConsultaCep $consultaCep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ConsultaCep  $consultaCep
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConsultaCep $consultaCep)
    {
        //
    }
}
