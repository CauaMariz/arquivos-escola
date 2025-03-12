import javax.swing.*;
import java.util.Scanner;

public class Calculadora {

    Scanner x = new Scanner(System.in);

    void menu(){

        String respUser =
                JOptionPane.showInputDialog
                        (" 1-SOMAR \n 2-SUBTRACAO \n 3-MULTIPLICACAO \n 4-DIVISAO \n " +
                                "5-AREA DO TRIANGULO \n 6-AREA DO QUADRADO \n 7-SAIR \n Digite uma opcao: ");

        switch(respUser) {

            case "1":
                somar();
              break;
            case "2":
                subtrarir();
               break;
            case "3":
                multi();
                break;
            case "4":
                dividir();
                break;
            case "5":
                areaTriangulo();
                break;
            case "6":
                areaQuadrado();
                break;
            case "7":
                System.out.println("OBRIGADO PELA PREFERENCIA!");
                maiorOuMenor();
                break;
            default:
                JOptionPane.showMessageDialog(null,"Opcao errada");
        }
        String respUser1 = JOptionPane.showInputDialog("Deseja continuar?");

        switch (respUser1) {
            case "S":
                menu();
                break;
            case "s":
                menu();
                break;
            default:
                break;
        }
      }
    void somar(){

        double num1 = Double.parseDouble(JOptionPane.showInputDialog("Digite um número: "));
        double num2 = Double.parseDouble(JOptionPane.showInputDialog("Digite outro número: "));

        double somar = num1 + num2;
        JOptionPane.showMessageDialog(null,"Valor da soma: " + somar);
    }
    void subtrarir(){

        double num1 = Double.parseDouble(JOptionPane.showInputDialog("Digite um número: "));
        double num2 = Double.parseDouble(JOptionPane.showInputDialog("Digite outro número: "));

        double subt = num1 - num2;
        JOptionPane.showMessageDialog(null,"Valor da subtracao: " + subt);

    }
    void multi(){

        double num1 = Double.parseDouble(JOptionPane.showInputDialog("Digite um número: "));
        double num2 = Double.parseDouble(JOptionPane.showInputDialog("Digite outro número: "));

        double multi = num1 * num2;
        JOptionPane.showMessageDialog(null,"Valor da multiplicacao: " + multi);

    }
    void dividir(){

        double num1 = Double.parseDouble(JOptionPane.showInputDialog("Digite um número: "));
        double num2 = Double.parseDouble(JOptionPane.showInputDialog("Digite outro número: "));


        while  (num1 <= 0 || num2<=0) {
            System.out.println("Digite numeros validos");
            System.out.println("Digite um número denovo: ");
            num1 = x.nextDouble();
            System.out.println("Digite outro número denovo: ");
            num2 = x.nextDouble();
        }

        double div = num1 / num2;
        JOptionPane.showMessageDialog(null,"Valor da divisao: " + div);

    }

    void areaTriangulo(){

        double num1 = Double.parseDouble(JOptionPane.showInputDialog("Digite a basa do triangulo: "));
        double num2 = Double.parseDouble(JOptionPane.showInputDialog("Digite a altura do triangulo: "));


        while  (num1 <= 0 || num2<=0) {
            System.out.println("Digite numeros validos");
            System.out.println("Digite um número denovo: ");
            num1 = x.nextDouble();
            System.out.println("Digite outro número denovo: ");
            num2 = x.nextDouble();
        }

        double area = (num1 * num2) / 2;
        JOptionPane.showMessageDialog(null,"Valor da area " + area);

    }
    void areaQuadrado() {

        double num1 = Double.parseDouble(JOptionPane.showInputDialog("Digite a base do quadrado: "));
        double num2 = Double.parseDouble(JOptionPane.showInputDialog("Digite a altura do quadrado: "));


        while (num1 <= 0 || num2 <= 0) {
            System.out.println("Digite numeros validos");
            System.out.println("Digite um número denovo: ");
            num1 = x.nextDouble();
            System.out.println("Digite outro número denovo: ");
            num2 = x.nextDouble();
        }

        double area = num1 * num2;
        JOptionPane.showMessageDialog(null, "Valor da area " + area);

    }    void maiorOuMenor() {

        int idade = Integer.parseInt(JOptionPane.showInputDialog("Digite sua idade: "));

        if (idade < 18){
            JOptionPane.showMessageDialog(null,"Menor de idade");
        }
        else{
            JOptionPane.showMessageDialog(null,"Maior de idade");
        }

    }
}
