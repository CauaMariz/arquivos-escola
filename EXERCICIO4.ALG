
Algoritmo "exercicio4"


Var
   aluno, nota1, nota2: inteiro
   media: real

Inicio
   aluno <- 1


   enquanto aluno <= 10 faca

      escreva("Digite as notas do aluno ", aluno, ": ")
      leia(nota1, nota2)


      media <- (nota1 + nota2) / 2


      escreval("A média do aluno ", aluno, " é: ", media)

      aluno <- aluno + 1
   fimenquanto

Fimalgoritmo
