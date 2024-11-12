package com.example.view;

import java.awt.BorderLayout;
import java.awt.List;

import javax.swing.JButton;
import javax.swing.JPanel;
import javax.swing.JTable;
import javax.swing.table.DefaultTableModel;

import com.example.controllers.MaquinaController;

public class MaquinasPanel extends JPanel {
    private MaquinaController maquinaController;
    private JTable maquinasTable;
    private DefaultTableModel tableModel;
    private JButton btnSalvarAlteracoes;
    private JButton btnCadastrarMaquina;

//construtor
public MaquinasPanel(){
    super(new BorderLayout());
    maquinaController = new MaquinaController();
}
public class MaquinasPanel extends JPanel{
//criar a tabela
public MaquinasPanel(){
List<Maquina> maquinas = maquinaController.readMaquinas();


}
} 
}