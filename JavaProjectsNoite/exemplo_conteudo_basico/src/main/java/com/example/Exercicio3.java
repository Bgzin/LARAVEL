package com.example;

import java.util.Scanner;

/**
 * Exercicio3
 */
public class Exercicio3 {
Scanner sc = new Scanner(System.in);
    //atributos
  
    

  public void escolhas(){
 
//receber os numeros
System.out.println("defina o primeiro numero");
    int numero1= sc.nextInt();
System.out.println("defina o segundo numero");
    int numero2= sc.nextInt();
 System.out.println("Numeros armazenados");   

 //operadores
 int soma = numero1+numero2;
 int subtracao = numero1-numero2;
 int multiplicacao = numero1*numero2;

    System.out.println("Escolha um numero de 1 a 4");
    int escolha = sc.nextInt();
    
    if(escolha==1){
      System.out.println("a soma dos numeros é "+soma);
    }else if (escolha==2) {
        System.out.println("a subtração dos numeros é"+subtracao);
    }else{
      
        System.out.println("a multiplicação dos numeros é "+multiplicacao);
    }
  }
}