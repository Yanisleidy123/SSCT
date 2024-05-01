<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fingerprint;
use App\Models\titulo;

class FingerprintController extends Controller
{
    public function store(Request $request)
    {
        return response()->json(['message' => 'Impressão digital salva com sucesso'], 200);
        // Validar os dados recebidos
        $request->validate([
        'fingerprint_data' => 'required'
            
        ]);
    

        // Extrair os dados da requisição
        $fingerprintData = $request->fingerprint_data;

        // Separar os dados
        $data = explode(',', $fingerprintData);
        $fingerID = $data[0];
        $confidence = $data[1];

        // Salvar na base de dados
        $fingerprint = new Fingerprint();
        $fingerprint->finger_id = $fingerID;
        $fingerprint->confidence = $confidence;
        $fingerprint->save();

        return response()->json(['message' => 'Impressão digital salva com sucesso'], 200);
    }
}
