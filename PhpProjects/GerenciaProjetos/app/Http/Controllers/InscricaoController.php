<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscricao; // Esse é o modelo para inscrições, tipo a tabela onde guardamos os registros de inscrições.
use App\Models\Usuario; // Usado para listar os usuários no formulário, caso precise de uma lista de usuários.
use App\Models\Projeto; // Usado para listar os projetos no formulário, tipo mostrar quais projetos estão disponíveis para inscrição.
use Illuminate\Support\Facades\Auth; // Utilizado para pegar a informação do usuário que está logado.

class InscricaoController extends Controller
{
    // Método para listar todas as inscrições do usuário logado
    public function index()
    {
        $usuarioId = Auth::id(); // Pega o ID do usuário que está logado
        $inscricoes = Inscricao::where('idUsuarioFK', $usuarioId) // Encontra todas as inscrições que pertencem ao usuário logado
            ->with('projeto') // Inclui as informações do projeto associado
            ->get(); // Pega todas essas inscrições

        return view('inscricoes.index', ['inscricoes' => $inscricoes]); // Retorna a view com todas as inscrições para o usuário
    }

    // Método para mostrar o formulário de criação de uma nova inscrição para um projeto específico
    public function create($id)
    {
        $projeto = Projeto::findOrFail($id); // Encontra o projeto pelo ID ou retorna um erro se não encontrar
        return view('inscricoes.create', ['projeto' => $projeto]); // Mostra a view de criação com o projeto específico
    }

    // Método para salvar uma nova inscrição
    public function store(Request $request)
    {
        // Valida os dados enviados no formulário
        $request->validate([
            'idProjetoFK' => 'required|exists:projetos,id', // Verifica se o projeto existe
            'descricaoSolicitacao' => 'required|string|max:255', // Verifica se a descrição está preenchida e tem no máximo 255 caracteres
            'nomeUsu' => 'required|string|max:255', // Verifica se o nome do usuário está preenchido e tem no máximo 255 caracteres
        ]);

        // Cria uma nova inscrição com os dados fornecidos
        Inscricao::create([
            'idUsuarioFK' => Auth::id(), // Usa o ID do usuário logado
            'idProjetoFK' => $request->input('idProjetoFK'), // ID do projeto
            'nomeUsuSolit' => $request->input('nomeUsu'), // Nome do usuário
            'descricaoSolicitacao' => $request->input('descricaoSolicitacao'), // Descrição da solicitação
        ]);

        return redirect()->route('inscricoes.index')->with('success', 'Inscrição criada com sucesso!'); // Redireciona para a lista de inscrições com uma mensagem de sucesso
    }

    // Método para mostrar os detalhes de uma inscrição específica
    public function show($id)
    {
        $inscricao = Inscricao::findOrFail($id); // Encontra a inscrição pelo ID ou retorna um erro se não encontrar
        return view('inscricoes.show', ['inscricao' => $inscricao]); // Mostra a view com os detalhes da inscrição
    }

    // Método para mostrar o formulário de edição de uma inscrição
    public function edit($id)
    {
        $inscricao = Inscricao::findOrFail($id); // Encontra a inscrição pelo ID ou retorna um erro se não encontrar
        $projetos = Projeto::all(); // Pega todos os projetos disponíveis
        return view('inscricoes.edit', ['inscricao' => $inscricao, 'projetos' => $projetos]); // Mostra a view de edição com a inscrição e a lista de projetos
    }

    // Método para atualizar uma inscrição existente
    public function update(Request $request, $id)
    {
        // Valida os dados enviados no formulário
        $request->validate([
            'idProjetoFK' => 'required|exists:projetos,id', // Verifica se o projeto existe
            'descricaoSolicitacao' => 'required|string|max:255', // Verifica se a descrição está preenchida e tem no máximo 255 caracteres
            'nomeUsu' => 'required|string|max:255', // Verifica se o nome do usuário está preenchido e tem no máximo 255 caracteres
        ]);

        $inscricao = Inscricao::findOrFail($id); // Encontra a inscrição pelo ID ou retorna um erro se não encontrar
        $inscricao->update([
            'idProjetoFK' => $request->input('idProjetoFK'), // Atualiza o ID do projeto
            'nomeUsuSolit' => $request->input('nomeUsu'), // Atualiza o nome do usuário
            'descricaoSolicitacao' => $request->input('descricaoSolicitacao'), // Atualiza a descrição da solicitação
        ]);

        return redirect()->route('inscricoes.index')->with('success', 'Inscrição atualizada com sucesso!'); // Redireciona para a lista de inscrições com uma mensagem de sucesso
    }

    // Método para deletar uma inscrição
    public function destroy($id)
    {
        $inscricao = Inscricao::findOrFail($id); // Encontra a inscrição pelo ID ou retorna um erro se não encontrar
        $inscricao->delete(); // Deleta a inscrição

        return redirect()->route('inscricoes.index')->with('success', 'Inscrição deletada com sucesso!'); // Redireciona para a lista de inscrições com uma mensagem de sucesso
    }
}
