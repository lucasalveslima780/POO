/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author Admin
 */
public class Principal {
    public static void main(String[] args) {
       
        //Criando Objeto
        Pessoa pessoa1 = new Pessoa();
        Pessoa pessoa2 = new Pessoa();
        Pessoa pessoa3 = new Pessoa();
        
        pessoa1.nome = "Giovanna";
        pessoa1.idade = 16;
        pessoa1.RG = "123456789";
        
        pessoa2.nome = "Marcos";
        pessoa2.idade = 32;
        pessoa2.RG = "987654321";
        
        pessoa3.nome = "Guilherme";
        pessoa3.idade = 17;
        pessoa3.RG = "123789456";
        
        //Exibição de informações
        System.out.println("Pessoa 1: ");
        pessoa1.exibir_Infos();
        System.out.println("\n");
        
        System.out.println("Pessoa 2: ");
        pessoa2.exibir_Infos();
        System.out.println("\n");
        
        System.out.println("Pessoa 3: ");
        pessoa3.exibir_Infos();
        System.out.println("\n");
        
    }
    
}
