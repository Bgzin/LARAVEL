package com.example;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.JTabbedPane;

public class CalculadoraAbas extends JFrame{
    //atributos

    //construtor
    public CalculadoraAbas() {
        //configuraçoes basicas da janela
        super("Calculadora de Abas");
        this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        this.setSize(400, 400);

        //adicionar os componentes

        JTabbedPane abas = new JTabbedPane();
        
        JPanel calcSimples = new CalculadoraSimples();
        abas.addTab("SIMPLES", calcSimples);

        JPanel calcAvancada = new CalculadoraAvancada();
        abas.addTab("AVANCADA", calcAvancada);

        this.add(abas);

        this.setVisible(true);
    }

    
}
