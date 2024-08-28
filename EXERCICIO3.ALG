Algoritmo "exercicio3"

Var
resp: caracter
nomes: vetor [1..10] de caracter
x:inteiro
a:inteiro


Inicio

         repita
         
         x<-1
         a<-1
         
         para x de 1 ate 10 faca
         
         escreval("Digite seu nome: ",x)
         leia(nomes[x])
         fimpara

         para a de 1 ate 10 faca
         
         escreval("Digite a posicao",a)
         leia(a)

         enquanto (a >10) ou (a<0) faca
         
         escreval("Digite a posicao entre 0 e 10")
         leia(a)
         
         fimenquanto
         fimpara
         

         escreval("Quer continuar? (S/N)")
         leia(resp)
         ate (resp="N") ou (resp="n")

         para x de 1 ate 10 faca
         escreval("Nomes: ",nomes[x])
         fimpara
Fimalgoritmo