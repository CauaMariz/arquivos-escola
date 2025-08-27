package org.example.logica;

import java.util.Scanner;

public class DoWhileSimples {
    public static void main(String[] args) {
        Scanner x = new Scanner(System.in);
        int num;

        do{
            System.out.println("Digite um numero (0 para sair): ");
            num = x.nextInt();
        }
        while(num != 0);
        x.close();
    }
}
