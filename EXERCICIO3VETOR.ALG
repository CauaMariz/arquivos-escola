Algoritmo "Exercicio2Vetor"

Var
    nomes: vetor[1..10] de caracter
    posicao:inteiro
    resp:caracter

    x:inteiro
Inicio
      posicao<-1
      x<-1
      
      repita
      
      escreval("Digite um nome: ")
      leia(nomes[posicao])

      escreval("Digite uma posicao: ")
      leia(posicao)

      x<-x+1
      
      nomes[posicao]<-nomes[posicao]

      escreval("Quer continuar? S/N")
      leia(resp)
      ate (resp="N") ou (resp="n")
      
      para x de 1 ate 10 faca
      escreval("Conteudo do vetor: ",nomes[x])

      fimpara

Fimalgoritmo