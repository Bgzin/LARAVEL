package com.example;

import lombok.AllArgsConstructor;
import lombok.Getter;
import lombok.NoArgsConstructor;
import lombok.Setter;

@AllArgsConstructor
@NoArgsConstructor
@Getter
@Setter
public class Pessoa {
    //atributos
    private String nome;
    private String cpf;

    //métodos
    public String exibirInfo(){
        return "Nome: "+nome+" CPF: "+cpf;
    }

}
