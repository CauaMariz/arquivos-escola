package Interfaces;

import java.text.Normalizer;

public class TestaFormaInterfaces {
    public static void main(String[] args) {
        FormaInterfaces circulo = new CirculoInterfaces(2);
        FormaInterfaces retangulo = new RetanguloInterfaces(3,4);

        System.out.println("Area do circulo: " + circulo.calcularArea());

        System.out.println("Area do retangulo: " + retangulo.calcularArea());
    }
}
