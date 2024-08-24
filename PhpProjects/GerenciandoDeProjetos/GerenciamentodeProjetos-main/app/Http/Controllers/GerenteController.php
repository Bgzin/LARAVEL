<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gerente; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class GerenteController extends Controller
{
    /**
     * Mostra o formulário para criar um novo gerente.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register_manager');
    }

    /**
     * Armazena um novo gerente no banco de dados.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Valida os dados da requisição
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:gerentes', // Verifica na tabela 'gerentes'
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Cria uma nova instância de gerente e salva no banco de dados
        Gerente::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redireciona para o login com uma mensagem de sucesso
        return redirect()->route('login')->with('success', 'Gerente registrado com sucesso.');
    }
}
