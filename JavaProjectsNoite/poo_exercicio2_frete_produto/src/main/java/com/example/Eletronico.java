package com.example;

import lombok.Getter;
import lombok.Setter;

@Getter
@Setter
public class Eletronico extends Produto implements Transportavel {
//atributo
private double volume;

public Eletronico(String nome, double preco, double volume){
    super(nome, preco);
    this.volume = volume;
}

@Override
public double calcularPeso(){
double peso = volume *1.5;
return peso;
}

@Override
public double calcularFrete(){
    double valorFrete = calcularPeso()*2;
    return valorFrete;
    
}
}
