package com.example.models;
import java.time.LocalDate;

import lombok.AllArgsConstructor;
import lombok.Getter;
import lombok.NoArgsConstructor;
import lombok.Setter;

@Getter
@Setter
@NoArgsConstructor
@AllArgsConstructor
public class Maquina {
    public Maquina(Object int1, Object string, Object string2, Object string3, Object string4, Object string5,
            Object int2, Object string6, Object string7, Object string8) {
        //TODO Auto-generated constructor stub
    }
    private String id;
    private String codigo;
    private String nome;
    private String modelo;
    private String fabricante;
    private LocalDate dataAquisicao;
    private long tempoVidaEstimado;
    private String localizacao;
    private String detalhes;
    private String manual;
}
