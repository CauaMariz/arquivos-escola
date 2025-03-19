import javax.swing.*;
import java.util.Scanner;

//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.
public class Main {
    String nameUser;
    String passUser;
    public void cadastro(){
         nameUser = JOptionPane.showInputDialog("Cadastro \n Digite seu nome de usuário: ");
         passUser = JOptionPane.showInputDialog("Digite sua senha: ");

        while (nameUser.isEmpty() || passUser.isEmpty()){
            nameUser = JOptionPane.showInputDialog("Digite seu nome de usuário novamente: ");
            passUser = JOptionPane.showInputDialog("Digite sua senha novamente: ");
        }

        JOptionPane.showMessageDialog(null,"Cadastro realizado com sucesso!");
    }
    public void login(){
        String newNameUser = JOptionPane.showInputDialog("Login \n Digite seu nome de usuário: ");
        String newPassUser = JOptionPane.showInputDialog("Digite sua senha: ");

        while (newNameUser.isEmpty() || newPassUser.isEmpty() || !newNameUser.equals(nameUser) || !newPassUser.equals(passUser)){
            newNameUser = JOptionPane.showInputDialog("Digite seu nome de usuário novamente: ");
            newPassUser = JOptionPane.showInputDialog("Digite sua senha novamente: ");
        }
        JOptionPane.showMessageDialog(null,"Login realizado com sucesso!");
    }
    public static void main(String[] args) {
        Main MainApp = new Main();

        MainApp.cadastro();
        MainApp.login();
    }
}