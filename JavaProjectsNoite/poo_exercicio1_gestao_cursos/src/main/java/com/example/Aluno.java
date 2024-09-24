package com.example;

import lombok.Getter;
import lombok.Setter;

@Getter
@Setter
public class Aluno extends Pessoa implements Avaliavel{
     //atributos
     private String matricula;
     private double nota;

     //construtor
     public Aluno(String nome, String cpf, String matricula){
        super(nome, cpf);
        this.matricula = matricula;
        this.nota = 0.0;
     }

      //método exibirInfo
      @Override
      public String exibirInfo(){
        super.exibirInfo();
        return " Matricula: "+matricula+" Nota: "+nota;
      }

    @Override
    public String avaliarDesempenho() {
        if (nota>=7) {
            return "Aprovado";
        } else if(nota>=5 && nota<7){
            return "Recuperação";
        }else{
            return "Reprovado";
        }
    }

    public String getMatricula() {
        // TODO Auto-generated method stub
        throw new UnsupportedOperationException("Unimplemented method 'getMatricula'");
    }


}
