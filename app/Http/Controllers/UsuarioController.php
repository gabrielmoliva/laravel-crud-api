<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller{

    public function index(){
        $usuario = Usuario::all();
        return response()->json($usuario);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'cpf' => 'required|integer',
            'nome' => 'required|string',
            'data_nascimento' => 'required|string',
        ]);

        $usuario = Usuario::create($validatedData);

        return response()->json($usuario, 201);
    }

    public function show(Usuario $usuario){
        return response()->json($usuario);
    }

    public function update(Request $request, Usuario $usuario){
        $validatedData = $request->validate([
            'cpf' => 'required|integer',
            'nome' => 'required|string',
            'data_nascimento' => 'required|string',
        ]);

        $usuario->update($validatedData);
        return response()->json($usuario, 200);
    }

    public function destroy(Usuario $usuario){
        $usuario->delete();

        return response()->json(null, 204);
    }
}