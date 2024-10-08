package com.example;

import javax.swing.JButton;
import javax.swing.JPanel;
import javax.swing.JTextField;
import java.awt.BorderLayout;
import java.awt.GridLayout;

public class CalculadoraSimples extends JPanel{
    
JTextField displaySimples;
String[] botoes =
 {"7","8","9","/",
  "4","5","5","*",
  "1","2","3","-",
  "0","=","+","C"};

//construtor
public CalculadoraSimples(){
    super(new BorderLayout());
    displaySimples = new JTextField();
    displaySimples.setHorizontalAlignment(JTextField.RIGHT);
    displaySimples.setEditable(false);
    this.add(displaySimples,BorderLayout.NORTH);

    JPanel painelBotoes = new JPanel(new GridLayout(4,4,3,3));
    for (String textoBotoes : botoes) {
        JButton botao = new JButton(textoBotoes);
        // Adicionar açao dos botoes botao.addActionListener(null);
        painelBotoes.add(botao);
    }
    this.add(painelBotoes,BorderLayout.CENTER);

}
 public void setDisplaySimples(String texto) {
     this.displaySimples.setText(texto);
 }
 public String getDisplaySimples() {
     return displaySimples.getText();
 }

};


