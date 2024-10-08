package com.example;

import lombok.AllArgsConstructor;
import lombok.Getter;
import lombok.NoArgsConstructor;
import lombok.Setter;

@Getter
@Setter
@NoArgsConstructor
@AllArgsConstructor
public abstract class Produto {
 //atributos
 private String nome;
 private double preco;

 public abstract double calcularPeso();
    
}
