package com.example;

import java.io.BufferedReader;
import java.io.FileReader;

public class LeituraCSV {
    public void exemplo(){
        try {
            BufferedReader br = new BufferedReader(
                new FileReader("dados.csv"));
            String linha = br.readLine();
            if (linha != null) {
                String colunas[]= linha.split(",");
                for (String coluna : colunas) {
                    System.out.println(coluna+" ");
                }
            }
        } catch (Exception e) {
            // TODO: handle exception
        }
    }
}
