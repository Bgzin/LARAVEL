package com.example;

import java.util.Scanner;

public class Exercicio1 {
    //atributos
    double[] notas = new double[4];
    double media = 0;
    boolean bonus = false;
   
    //métodos

    public void calculoMédia(){
        Scanner sc = new Scanner(System.in);
        //receber as notas
        for (int i = 0; i < notas.length; i++) {
            System.out.println("digite a Nota:" + (i+1)+ ":");
            notas[i]=sc.nextDouble();
            media+=notas[i];
        }
    //calcular média
     media = media/notas.length;
       
    //verificar bonus
    if (notas[0]>=9 && notas[1]>=9 && notas[2]>=9 && notas[3]>=9) {
        media = (media*1.1>10?media=10:media*1.1);//operador ternário
    } 

    //printar resultado
    if(media>=7){
        System.out.println("Á media do aluno é %.2f"+media + "resultado aprovado");
    }else if(media>=5 && media<7){
        System.out.println("Á media do aluno é %.2f"+media + "resultado Recuperação");
    }else{
        System.out.println("Á media do aluno é %.2f"+media + "resultado Reprovado");
    }
    }

}
