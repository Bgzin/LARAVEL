package com.example.models;

import java.time.LocalDate;

import lombok.AllArgsConstructor;
import lombok.Getter;
import lombok.NoArgsConstructor;
import lombok.Setter;

@Getter
@Setter
@AllArgsConstructor
@NoArgsConstructor
public class Falhas {
    private String id;
    private long maquinaID;
    private LocalDate data;
    private String problema;
    private String prioridade;
    private String operador;
}
