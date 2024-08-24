<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EquipeController extends Controller
{
    public function index()
    {
       
        //Busca o usuario autenticado
        $usuario = Auth::user();

 
        // busca as equipes ja associadas ao usuario
        $equipes = Equipe::where('usuCriadorEquipe', $usuario->id)->get();

        // Retorna a view com as equipes
        return view('equipes.dashboard', compact('equipes'));
    }


    // Exibe o formulário de cadastro de equipe
    public function cadastroForm()
    {
        return view('equipes.cadastro');
    }
     //da inicio ao processo de cadastro da nova equipe
    public function cadastro(Request $request)
    {
        $validatedData = $request->validate([
            'nomeEquipe' => 'required|string|max:255',
            'qtdMembrosEquipe' => 'required|integer|min:1',
        ]);

        Equipe::create([
            'nomeEquipe' => $validatedData['nomeEquipe'],
            'qtdMembrosEquipe' => $validatedData['qtdMembrosEquipe'],
            'usuCriadorEquipe' => Auth::id(),
        ]);

        // redirecionamento ao index com mensagem de sucesso
        return redirect()->route('equipes.dashboard')->with('success', 'Equipe cadastrada com sucesso!');
    }
    public function show(Equipe $equipe)
    {
        return view('equipes.show', compact('equipe'));
    }
}
