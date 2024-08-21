Algoritmo "UsandoPara"

Var
  nomes:vetor [1..20] de caractere
  idades:vetor [1..20] de inteiro
  x, soma:inteiro

Inicio

  soma <- 0


  para x de 1 ate 20 faca
    escreval("Digite seu nome ", x)
    leia(nomes[x])
  fimpara


  para x de 1 ate 20 faca
    escreval("Digite sua idade ", x)
    leia(idades[x])
  fimpara

  para x de 1 ate 20 faca
    soma <- soma + idades[x]
  fimpara


  escreval("Nomes e Idades:")
  
  para x de 1 ate 20 faca
    escreval("Nome: ", nomes[x], " Idade: ", idades[x])
  fimpara


  escreval("Soma das idades: ", soma)

Fimalgoritmo
