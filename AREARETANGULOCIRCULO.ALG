Algoritmo "AreaRetanguloCirculo"

Var
   resp,x:inteiro
   respN:caracter
   raioCirculo,BaseRetangulo,AlturaRetangulo:real
funcao AreaCirculo(raioCirculo:real):real

var
   NumPi:real

inicio
   NumPi<-3.14
   retorne (raioCirculo*raioCirculo) *  NumPi
fimfuncao

funcao AreaRetangulo(BaseRetangulo,AlturaRetangulo:real):real

var
   conta:real

inicio
   conta<-BaseRetangulo*AlturaRetangulo
   retorne conta
fimfuncao
Inicio

   repita
      limpatela
      escreval("|-------------------------------------------|")
      escreval("|-Bem vindo ao Programa de calculo de Area--|")
      escreval("|-------------------------------------------|")
      escreval("|-1-------Calculo da area do ciruculo-------|")
      escreval("|-2-------Calculo da area do retangulo------|")
      escreval("|-0------------------Sair-------------------|")
      escreval("|-------------------------------------------|")
      leia (resp)


      escolha (resp)

      caso 1


         repita
            escreval("Digite o raio do circulo")
            leia (raioCirculo)


            escreval("Area do circulo: ",AreaCirculo(raioCirculo))
            escreval("Deseja ver mais areas? RESPOSTA: S/N")
            leia (respN)

         ate (respN="n") ou (respN="N")

      caso 2

         repita
            escreval("Digite a base do retangulo")
            leia (BaseRetangulo)

            escreval("Digite a altura do retangulo")
            leia (AlturaRetangulo)

            escreval("Area do retangulo: ",AreaRetangulo(BaseRetangulo,AlturaRetangulo))
            escreval("Deseja ver mais areas? RESPOSTA: S/N")
            leia (respN)
         ate (respN="n") ou (respN="N")
         
      caso 0

         escreval("Obrigado por utilizar nosso programa!")

      outrocaso
         escreval("Opcao invalida")
         leia(x)
      fimescolha

   ate (resp =0)

Fimalgoritmo