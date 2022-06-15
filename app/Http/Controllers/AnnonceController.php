<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class AnnonceController extends Controller
{
 
  function list(){
        $response = Http::get('https://api.oumardev.com/apoloanapi/list')->json( );
        return view('Annonces\list',['response'=>$response]);
        var_dump($response);
    }
    public function Create( Request $request){
        
      return view('Annonces.create');
  }

    public function store(Request $request){
      
      $response = Http::post('http://www.oumardev.com:1000/apoloanapi/annonce/create', [
          'types'=> $request->types,
          'duree'=> $request->duree,
          'montant'=> intval($request->montant),
          'modalitePaiement'=>$request->modalitePaiement
          
      ])->json();
      
      // echo var_dump($request->types);
      // echo var_dump($request->duree);
      // echo var_dump($request->montant);
      // echo var_dump($request->modalitePaiement);

      echo var_dump($response);

  }

    
}
