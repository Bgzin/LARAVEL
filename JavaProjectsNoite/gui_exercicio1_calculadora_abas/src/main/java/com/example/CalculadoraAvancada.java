package com.example;

import javax.swing.JPanel;


import javax.swing.JButton;
import javax.swing.JPanel;
import javax.swing.JTextField;
import java.awt.BorderLayout;
import java.awt.GridLayout;

public class CalculadoraAvancada extends JPanel{
    
JTextField displayAvancada;
String[] botoes =
 {"^","sqrt","log","!",
    "7","8","9","/",
  "4","5","5","*",
  "1","2","3","-",
  "0","+","=","C",};

//construtor
public CalculadoraAvancada(){
    super(new BorderLayout());
    displayAvancada = new JTextField();
    displayAvancada.setHorizontalAlignment(JTextField.RIGHT);
    displayAvancada.setEditable(false);
    this.add(displayAvancada,BorderLayout.NORTH);

    JPanel painelBotoes = new JPanel(new GridLayout(5,4,3,3));
    for (String textoBotoes : botoes) {
        JButton botao = new JButton(textoBotoes);
        // Adicionar açao dos botoes botao.addActionListener(null);
        painelBotoes.add(botao);
    }
    this.add(painelBotoes,BorderLayout.CENTER);
}

};







