<?php

namespace App\Http\Controllers;

// Importa os modelos e classes que vamos usar
use App\Models\Tarefa;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TarefasController extends Controller
{
    // Mostra a lista de todas as tarefas
    public function index()
    {
        // Pega todas as tarefas do banco de dados
        $tarefas = Tarefa::all();

        // Envia a lista de tarefas para a view 'tarefas.index'
        return view('tarefas.index', compact('tarefas'));

        /* 
        // Código comentado que pegava as equipes do usuário
        $equipes = Tarefa::where('usuCriadorEquipe', $usuario->id)->get();
        */
    }

    // Mostra o formulário para criar uma nova tarefa
    public function create()
    {
        // Pega todos os usuários do banco de dados para o formulário
        $usuarios = Usuario::all();

        // Envia a lista de usuários para a view 'tarefas.create'
        return view('tarefas.create', compact('usuarios'));
    }

    // Recebe os dados do formulário e cria uma nova tarefa
    public function store(Request $request)
    {
        // Valida os dados recebidos do formulário
        $validatedData = $request->validate([
            'nomeTarefa' => 'required|string|max:255', // Nome da tarefa é obrigatório e não pode passar de 255 caracteres
            'prazoTarefa' => 'required|date', // Prazo da tarefa é obrigatório e deve ser uma data
            'descricaoTarefa' => 'nullable|string', // Descrição é opcional
            'atribuicaoTarefa' => 'required|string|max:255', // Atribuição da tarefa é obrigatória e com limite de tamanho
        ]);

        // Cria uma nova tarefa com os dados validados
        Tarefa::create([
            'nomeTarefa' => $validatedData['nomeTarefa'],
            'prazoTarefa' => $validatedData['prazoTarefa'],
            'descricaoTarefa' => $validatedData['descricaoTarefa'],
            'atribuicaoTarefa' => $validatedData['atribuicaoTarefa'],
        ]);

        // Redireciona para a lista de tarefas com uma mensagem de sucesso
        return redirect()->route('tarefas.index')->with('success', 'Tarefa criada com sucesso!');

        /* 
        // Código comentado que criava a tarefa e retornava um JSON de resposta
        $tarefa = Tarefa::create($validatedData);
        return response()->json([
            'message' => 'Tarefa criada com sucesso!',
            'tarefa' => $tarefa,
        ], 201); // Código de status HTTP 201 (Created)
        */
    }

    // Mostra os detalhes de uma tarefa específica
    public function show($id)
    {
        // Encontra a tarefa pelo ID
        $tarefa = Tarefa::findOrFail($id);

        // Envia a tarefa para a view 'tarefas.show'
        return view('tarefas.show', compact('tarefa'));
    }

    // Mostra o formulário para editar uma tarefa específica
    public function edit($id)
    {
        // Encontra a tarefa pelo IDs
        $tarefa = Tarefa::findOrFail($id);

        // Envia a tarefa para a view 'tarefas.edit'
        return view('tarefas.edit', compact('tarefa'));
    }

    // Atualiza os dados de uma tarefa
    public function update(Request $request, $id)
    {
        // Valida os dados recebidos para a atualização
        $validatedData = $request->validate([
            'nomeTarefa' => 'required|string|max:255', // Nome da tarefa é obrigatório e não pode passar de 255 caracteres
            'prazoTarefa' => 'required|date', // Prazo da tarefa deve ser uma data e é obrigatório
            'descricaoTarefa' => 'nullable|string', // Descrição é opcional
            'atribuicaoTarefa' => 'required|string|max:255', // Atribuição é obrigatória e com limite de tamanho
        ]);

        // Encontra a tarefa pelo ID e atualiza com os dados validados
        $tarefa = Tarefa::findOrFail($id);
        $tarefa->update($validatedData);

        // Redireciona para a página de detalhes da tarefa com uma mensagem de sucesso
        return redirect()->route('tarefas.show', $tarefa->id)->with('success', 'Tarefa atualizada com sucesso!');
    }

    // Remove uma tarefa específica
    public function destroy($id)
    {
        // Encontra a tarefa pelo ID e exclui
        $tarefa = Tarefa::findOrFail($id);
        $tarefa->delete();

        // Redireciona para a lista de tarefas com uma mensagem de sucesso
        return redirect()->route('tarefas.index')->with('success', 'Tarefa excluída com sucesso!');
    }

    // Marca uma tarefa como concluída
    public function markAsCompleted($id)
    {
        // Encontra a tarefa pelo ID
        $tarefa = Tarefa::findOrFail($id);

        // Marca a tarefa como concluída (supondo que você tem um campo 'status' para isso)
        $tarefa->status = 'concluída';
        $tarefa->save();

        // Redireciona de volta para a lista de tarefas com uma mensagem de sucesso
        return redirect()->route('tarefas.index')->with('success', 'Tarefa marcada como concluída!');
    }
}
