import java.util.Scanner;

public class Teste{

    public static void main(String[] args){
        Scanner x = new Scanner(System.in);

        System.out.print("Digite um numero");
        double num1 = x.nextDouble();

        System.out.print("Digite outro numero");
        double num2 = x.nextDouble();

        while(num1 < 0 || num2 < 0){
            System.out.print("Digite um numero maior ou igual a zero");
            num1 = x.nextDouble();

            System.out.print("Digite outro numero maior ou igual a zero");
            num2 = x.nextDouble();
        }

        double soma = num1 + num2;

        System.out.print("Soma dos numeros: " + soma);

    }
}