<?php

namespace App\Http\Controllers;

// Importa os modelos e classes necessários
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    // Mostra o formulário de login para o usuário
    public function showLoginForm()
    {
        return view('usuarios.login');
    }

    // Processa o login do usuário
    public function login(Request $request) // Recebe os dados do formulário de login
    {
        // Valida os dados recebidos
        $credentials = $request->validate([
            'emailUsuario' => ['required', 'email'], // Email é obrigatório e deve ser um email válido
            'password' => ['required'], // Senha é obrigatória
        ]);

        // Tenta autenticar o usuário usando o guard 'usuario'
        if (Auth::guard('usuario')->attempt($credentials)) {
            // Checa o cargo do usuário para redirecionar para a página correta
            if (Auth::user()->cargoUsuario === 2) {
                $link = '/equipes'; // Se for cargo 2, vai para a página de equipes
            } elseif (Auth::user()->cargoUsuario === 1) {
                $link = '/homeComum'; // Se for cargo 1, vai para a página comum
            }
            // $request->session()->regenerate(); // Regenera a sessão para segurança (evita fixação de sessão)
            return redirect()->intended($link); // Redireciona para a página certa
        }

        // Se falhar a autenticação, volta com uma mensagem de erro
        return back()->withErrors([
            'emailUsuario' => 'As credenciais não correspondem aos nossos registros.',
        ])->onlyInput('emailUsuario'); // Retém o email no formulário
    }

    // Mostra o formulário de registro para novos usuários
    public function showRegistroForm()
    {
        return view('usuarios.cadastro');
    }

    // Processa o registro de um novo usuário
    public function cadastro(Request $request)
    {
        // Valida os dados recebidos do formulário de registro
        $request->validate([
            'nomeUsuario' => 'required|string|max:255', // Nome é obrigatório e com tamanho máximo
            'emailUsuario' => 'required|string|email|max:255|unique:usuarios', // Email é obrigatório, deve ser único e válido
            'cargoUsuario' => 'string|max:255', // Cargo é obrigatório e com tamanho máximo
            'password' => 'required|string|min:8|confirmed', // Senha é obrigatória, deve ter no mínimo 8 caracteres e ser confirmada
        ]);

        // Cria um novo usuário com os dados validados
        $usuario = Usuario::create([
            'nomeUsuario' => $request->nomeUsuario,
            'emailUsuario' => $request->emailUsuario,
            'cargoUsuario' => $request->cargoUsuario,
            'password' => Hash::make($request->password), // Cria o hash da senha para armazenamento seguro
        ]);

        /* 
        // Código comentado que faz login automático do novo usuário
        Auth::guard('usuario')->login($usuario);
        */

        // Redireciona para a página de login
        return redirect('/login');
    }

    // Faz o logout do usuário
    public function logout(Request $request)
    {
        Auth::guard('usuario')->logout(); // Faz o logout do guard 'usuario'
        $request->session()->regenerateToken(); // Regenera o token da sessão para segurança
        $request->session()->invalidate(); // Invalida a sessão atual
        $request->session()->regenerate(); // Cria uma nova sessão

        // Redireciona para a página inicial
        return redirect('/');
    }
}
