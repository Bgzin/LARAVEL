package com.example;

import java.awt.event.ActionListener;

public class SimplesActionListener implements ActionListener{
    private double valorAtual;
    JPanel calcSimples = new CalculadoraSimples(); 


    @Override
    public void actionPerformed(ActionEvent e) {
        String botaoPressionado = e.getActionCommand();

        if (comando.matches("\\d")){
            //composiçã dos numeros
            calcSimples.setDisplay(calcSimples.getDisplay() + comando);
        }else if (comando.matches("\\) {
            
        }
}
}


