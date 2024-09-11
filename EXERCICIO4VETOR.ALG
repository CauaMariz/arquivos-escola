Algoritmo "Exercicio2Vetor"

Var
    num: vetor[1..10] de inteiro
    posicao:inteiro
    resp:caracter
    x:inteiro
    
    soma:inteiro
Inicio
      posicao<-1
      x<-1
      soma<-0
      
      repita
      
      escreval("Digite um numero: ")
      leia(num[posicao])

      escreval("Digite uma posicao: ")
      leia(posicao)

      x<-x+1
      
      num[posicao]<-num[posicao]

      escreval("Quer continuar? S/N")
      leia(resp)
      ate (resp="N") ou (resp="n")
      


      
      para x de 1 ate 10 faca
      escreval("Conteudo do vetor: ",num[x])
      


      fimpara

      
      para x de 1 ate 10 faca
      soma <- soma + num[x]
      fimpara

      escreval("Soma dos numeros: ",soma)
      
      repita
      escreval("Digite qualquer tecla para sair")
      leia(resp)
      ate (resp <> "")
Fimalgoritmo