Algoritmo "algoritmoCadastrar"

Var
   resp:inteiro
   respN:caracter
   valores:vetor [1..10] de inteiro
   posicao:inteiro
   valor:vetor [1..10] de caracter

Inicio

      repita
      limpatela
      escreval("|-------------------------------------------|")
      escreval("|-Bem vindo ao Programa Cadastro de vetores-|")
      escreval("|-------------------------------------------|")
      escreval("|-1-------Cadastrar local do vetor----------|")
      escreval("|-0-------------Sair do sistema-------------|")
      escreval("|-------------------------------------------|")
      leia (resp)

      se (resp>1 ) entao

      escreval("Resposta incorreta")

      senao

      
      se (resp=1) entao
      
      repita
      escreval("Digite a posicao que voce deseja cadastrar no vetor")
      leia (posicao)
      
      escreval("Informe o nome que deseja colocar nesta posicao")
      leia (valor[posicao])
      
      escreval("Deseja cadastrar mais valores? RESPOSTA: N/n")
      leia (respN)
      
      ate (respN="n") ou (respN="N")
      
      senao
      

      escreval("Obrigado por utilizar nosso programa!")
      
      fimse
      fimse
      ate (resp =0)

Fimalgoritmo
