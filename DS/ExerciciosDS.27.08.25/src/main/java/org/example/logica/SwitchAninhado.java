package org.example.logica;

public class SwitchAninhado {
    public static void main(String[] args) {
        int categoria = 1;
        int opcao  = 2;

        switch (categoria){
            case 1:
                System.out.println("Categoria matematica");

                switch(opcao){
                    case 1:
                        System.out.println("Soma");
                        break;
                    case 2:
                        System.out.println("Subtracao");
                        break;
                    default:
                        System.out.println("Opcao invalida");
                        break;
                }
                break;

            case 2:
                System.out.println("Categoria texto");

                switch(opcao) {
                    case 1:
                        System.out.println("Contar letras");
                        break;
                    case 2:
                        System.out.println("Inverter string");
                        break;
                    default:
                        System.out.println("Opcao invalida");
                        break;
                }
                break;
        }
    }
}
