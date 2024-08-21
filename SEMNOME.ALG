Algoritmo "semnome"

Var
  nomes: vetor [1..20] de caracter
  idades:vetor [1..20] de inteiro
  x,soma:inteiro


Inicio

      x<- 1
      para x de 1 ate 20 faca
      escreval("Digite seu nome: ",x)
      leia(nomes[x])
      x<-x+1
      fimpara
      
      para x de 1 ate 20 faca
      escreval("Digite sua idade: ",x)
      leia(idades[x])
      x<-x+1
      fimpara
      
      soma<-soma + idades[1]+idades[2]+idades[3]+idades[4]+idades[5]+idades[6]+idades[7]+idades[8]+idades[9]+idades[10]+idades[11]+idades[12]+idades[13]+idades[14]+idades[15]+idades[16]+idades[17]+idades[18]+idades[19]+idades[20]
      escreval("Nomes: ",nomes[x])
      escreval("Idades: ",idades[x])
      escreval("Soma: ",soma)
Fimalgoritmo