Algoritmo "fatorial"

Var
   num:inteiro

funcao Fatorial(num:inteiro):inteiro

var
   contador,fator:inteiro
inicio

   fator<-1
   para contador de 1 ate num faca
      fator<-fator*contador
   fimpara
   retorne fator
fimfuncao


Inicio
   escreval("Digite um numero para ver seu fatorial")
   leia(num)

   escreval("O fatorial de " , num , " é: ",Fatorial(num))

Fimalgoritmo