package org.animais;

public class TestaAnimalAbstracao {
    public static void main(String[] args) {
        AnimalAbstracao cachorro = new CachorroAbstracao("Rex");

        AnimalAbstracao gato = new GatoAbstracao("Lilly");

        cachorro.emitirSom();
        gato.emitirSom();
    }
}
