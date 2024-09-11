Algoritmo "Exercicio2Vetor"

Var
    nomes: vetor[1..10] de caracter
    posicao:inteiro
    resp:caracter

Inicio
      posicao<-1
      
      repita
      
      escreval("Digite um nome: ")
      leia(nomes[posicao])

      escreval("Digite uma posicao: ")
      leia(posicao)

      nomes[posicao]<-nomes[posicao]
      escreval("Quer continuar? S/N")
      leia(resp)
      ate (resp="N") ou (resp="n")

Fimalgoritmo