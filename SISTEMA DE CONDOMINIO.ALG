Algoritmo   "Sistema de condominio"

var
   resp:caracter

   opcao, posicao,soma:inteiro

   valor: vetor [1..10] de inteiro

Inicio

   repita
      limpatela

      escreval("---------------------------- ")
      escreval(" SISTEMA DE CONDOMINIO ")
      escreval("-----------------------------")
      escreval("1-Cadastrar moradores por andar")
      escreval("-----------------------------")
      escreval("2-Consultar andares e moradores")
      escreval("-----------------------------")
      escreval("3-Relatório")
      escreval("-----------------------------")
      escreval("4-Sair")
      escreval("-----------------------------")


      escreval ("Digite uma opcao")

      leia (opcao)

      escolha (opcao)

      caso 1

         repita

            posicao<-1
            escreval ("Qual é o andar que voce quer cadastrar?")
            leia (posicao)

            escreval ("Quantas pessoas moram neste andar")
            leia (valor [posicao])

            soma<-soma+ valor[posicao]
            escreval("Informacao cadastrada com sucesso!")
            escreval("")
            escreval ("Quer cadastrar mais algum valor? S/N")
            leia (resp)

         ate (resp="N")

      caso 2

      escreval("-------------CONSULTA---------------")
         repita

            escreval("Qual andar voce quer ver?")
            leia(posicao)
            escreval("No andar: ", posicao, "há: ", valor[posicao], "pessoas")

            escreval("Quer contirnuar? S/N")
            leia(resp)

         ate (resp="N") ou (resp="n")


      caso 3
         posicao<-1
         
         escreval("--------------RELATORIO--------------")
         para posicao de 1 ate 10 faca
            escreval("No andar: ",posicao,". Tem: ",valor[posicao],". Pessoas.")
         fimpara

         escreval("A soma das pessoas é: ",soma)
         escreval("Digite qualquer tecla para voltar ao menu: ")
         leia(resp)


      caso 4
         repita

            escreval("Deseja quer realmente sair?")
            leia(resp)
         ate (resp="S")ou (resp="s")

      outrocaso
         escreval("Opcao invalida")
         leia(resp)
      fimescolha

   ate (resp="n")
fimalgoritmo