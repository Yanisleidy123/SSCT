<?php

namespace App\Http\Controllers;

use App\Models\taxista;
use Illuminate\Http\Request;

class TaxiController extends Controller
{
    public function index(){
       
        $response['taxistas']=taxista::all();
        // dd( $response['formandos']);
        return view('admin.taxista.index',$response);
    }
    public function create(){
        return view('admin.taxista.criar.index');
    }
    public function store(Request $request){
 
        taxista::create($request->all());
        return redirect()->route('admin.taxistas');
    }
    public function edit($id){
        $taxistas= taxista::where('id', $id)->first();
        if(!empty($taxistas))
        {
            return view('admin.taxista.editar.index',['taxistas'=>$taxistas]);
        }
        else
        {
            return redirect()->route('admin.taxistas');
        }
    }
    public function update(Request $request, $id){
        
        $data=[
            'nome'=>$request->nome,
            'ndebi'=>$request->ndebi,
            'genero'=>$request->genero,
            'data'=>$request->data,
            'numerotelefone'=>$request->numerotelefone,
            
        ];
          taxista::where('id', $id)->update($data);
         return redirect()->route('admin.taxistas');
    }
    public function destroy($id){
        taxista::where('id', $id)->delete();
         return redirect()->route('admin.taxistas');
    }  
}
