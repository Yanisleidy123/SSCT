<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBiometricRequest;
use App\Models\Biometric;
use Illuminate\Http\Request;

class BiometricController extends Controller
{
    public function index(){
        $biometrics = Biometric::all();
        return response()->json([
            'status' => true,
            'biometrics' => $biometrics
        ]);  
    }
    public function store(StoreBiometricRequest $request)
 {
    $biometric = Biometric::create($request->all());

    return response()->json([
        'status' => true,
        'message' => "Impressão Criada com Sucesso!",
        'biometric' => $biometric
    ], 200);
 }
}
