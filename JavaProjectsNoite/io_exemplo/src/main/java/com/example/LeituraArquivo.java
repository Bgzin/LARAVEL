package com.example;

import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;
import java.io.Reader;

public class LeituraArquivo {
    public void exemplo(){
        try (BufferedReader br = new BufferedReader(
            new FileReader(
                "C:\\Users\\DevTarde\\Documents\\Diogo\\Noite\\JavaProjectsNoite\\io_exemplo\\dados.txt"
                ))) {
                String linha;
                do {
                    linha = br.readLine();
                    System.out.println(linha==null?"Fim do Documento":linha);
                } while (linha!=null);
            
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}