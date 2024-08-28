Algoritmo "exercicio2"

Var
   nomes: vetor [1..10] de caracter
   x:inteiro

Inicio

   para x de 1 ate 10 faca
   
   escreval("Digite seu nome",x)
   leia (nomes[x])
   x<-x+1
   fimpara
   
   para x de 1 ate 10 faca
   escreval("Nomes: ",nomes[x])
   fimpara
Fimalgoritmo