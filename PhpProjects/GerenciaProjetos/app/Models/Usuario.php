<?php

namespace App\Models;

// Importa as classes necessárias para o modelo
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable, HasFactory; // Usa os traits Notifiable e HasFactory

    // Campos que podem ser preenchidos em massa
    protected $fillable = [
        'nomeUsuario', // Nome do usuário
        'emailUsuario', // Email do usuário
        'cargoUsuario', // Cargo do usuário
        'password', // Senha do usuário
        'equipe_id' // ID da equipe à qual o usuário pertence
    ];

    // Campos que devem ser ocultos em respostas JSON (para segurança)
    protected $hidden = [
        'password', // Senha do usuário (não deve ser exposta)
        'remember_token' // Token de lembrança para autenticação (não deve ser exposto)
    ];

    // Define a relação de um-para-muitos com o modelo Inscricao
    public function incricoes()
    {
        // Um usuário pode ter muitas inscrições
        return $this->hasMany(Inscricao::class);
    }

    // Define a relação de muitos-para-um com o modelo Hierarquia
    public function hierarquia()
    {
        // Um usuário pertence a uma hierarquia específica, baseada no cargo
        return $this->belongsTo(Hierarquia::class, 'cargoUsuario');
    }

    // Método para verificar se o usuário é um usuário comum
    public function isUser()
    {
        // Retorna true se o cargo do usuário for 1
        return $this->cargoUsuario === 1;
    }

    // Método para verificar se o usuário é um gerente
    public function isGerente()
    {
        // Retorna true se o cargo do usuário for 2
        return $this->cargoUsuario === 2;
    }

    // Define a relação de muitos-para-um com o modelo Equipe
    public function equipe()
    {
        // Um usuário pertence a uma equipe específica, baseada no ID da equipe
        return $this->belongsTo(Equipe::class, 'equipe_id');
    }
}
