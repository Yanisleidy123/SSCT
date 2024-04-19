<?php


namespace App\Http\Controllers;


use App\Models\titulo;
use Illuminate\Http\Request;

class TabelasController extends Controller
{
    public function index()
    {
     $response= titulo::join('taxistas','taxistas.id','=','titulos.taxista_id')
                      ->join('livretes','livretes.id','=','titulos.livrete_id')
                      ->orderBy('titulos.id','asc')
                      ->take(5)
                      ->get();
       return view('admin.index',['titulos'=>$response]);  
    }    
}
