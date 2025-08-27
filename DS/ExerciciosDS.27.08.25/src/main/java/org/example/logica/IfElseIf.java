package org.example.logica;

public class IfElseIf {
    public static void main(String[] args) {
        int idade = 15;

        if(idade < 12){
            System.out.println("Crianc");
        }
        else if (idade < 18){
            System.out.println("Adolescente");
        }
        else if(idade < 60){
            System.out.println("Adulto");
        }
        else{
            System.out.println("Idoso");
        }
    }
}
