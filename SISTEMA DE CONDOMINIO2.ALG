Algoritmo   "Sistema de condominio"

var
   resp:caracter

   opcao, posicao,soma:inteiro

   valor: vetor [1..100] de inteiro

   contador: inteiro


procedimento relatorio()

inicio
   escreval("|----------------------|")
   escreval("|       RELATÓRIO      |")
   escreval("|----------------------|")
   leia(resp)

fimprocedimento

procedimento cadastrar()

inicio
   escreval("|----------------------|")
   escreval("|       CADASTRAR      |")
   escreval("|----------------------|")

fimprocedimento

procedimento consultar()

inicio
   escreval("|----------------------|")
   escreval("|       CONSULTAR      |")
   escreval("|----------------------|")

fimprocedimento

procedimento MensagemFim()

inicio
   escreval("|-------------------------------------|")
   escreval("|OBRIGADO POR UTILIZAR NOSSO PROGRAMA!|")
   escreval("|-------------------------------------|")

fimprocedimento

procedimento Menu()

inicio
   escreval("|-------------------------------|")
   escreval("|-----SISTEMA DE CONDOMINIO-----|")
   escreval("|-------------------------------|")
   escreval("|1-Cadastrar moradores por andar|")
   escreval("|-------------------------------|")
   escreval("|2-Consultar andares e moradores|")
   escreval("|-------------------------------|")
   escreval("|3----------Relatório-----------|")
   escreval("|-------------------------------|")
   escreval("|4------------Sair--------------|")
   escreval("|-------------------------------|")
   escreval("Digite uma opcao")

fimprocedimento
Inicio

   repita

      limpatela

      Menu()

      leia (opcao)

      escolha (opcao)
      caso 1

         repita

            cadastrar()
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

         consultar()

         repita

            escreval("Qual andar voce quer ver?")
            leia(posicao)
            escreval("No andar: ", posicao, "há: ", valor[posicao], " pessoas")

            escreval("Quer contirnuar? S/N")
            leia(resp)

         ate (resp="N") ou (resp="n")


      caso 3

//ADICIONAR O NUMERO DA PAGINA A CADA RELATORIO. EXE: PAG. 1 PAG 2...
         relatorio()
         posicao<-1


         para posicao de 1 ate 30 faca
            escreval("No andar: ",posicao,". Tem: ",valor[posicao],". Pessoas.")
            posicao<-posicao + 1

         fimpara

         relatorio()
         se (posicao=30) entao
         para posicao de 31 ate 60 faca
         escreval("No andar: ",posicao,". Tem: ",valor[posicao],". Pessoas.")
         posicao<-posicao + 1

         fimpara
         
         relatorio()
         se (posicao=60) entao
         para contador de 61 ate 90 faca
         escreval("No andar: ",posicao,". Tem: ",valor[posicao],". Pessoas.")
         posicao<-posicao + 1

         fimpara
         
         relatorio()
         se (posicao=90) entao
         para posicao de 91 ate 100 faca
         escreval("No andar: ",posicao,". Tem: ",valor[posicao],". Pessoas.")

         fimpara

         
         escreval("A soma das pessoas é: ",soma)
         escreval("Digite qualquer tecla para voltar ao menu: ")
         leia(resp)

         fimse
         fimse
         fimse

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
      MensagemFim()
fimalgoritmo