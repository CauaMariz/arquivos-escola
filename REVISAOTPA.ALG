Algoritmo "RevisaoTPA"

Var

   nome:caracter
   idade, a,b:inteiro
   salario,  x, y, z :real
   situacao, soma:logico

Inicio
//Operadores aritmeticos + - * % \ / ^

   a<-5
   b<-6
   escreval("Soma: ", a + b)
   escreval("Multiplicacao: ", a * b)
   escreval("Divisao: ", a / b)
   escreval("Resto da divisao: ", b mod a)
   escreval("Potencia: ", a ^ b)
   escreval("Soma: ", a + b)
   escreval("Subtracao: ", a - b)
   escreval("Divisao de inteiros: ", a \ b)
   
//Expressoes aritmeticas

   x<-2*3
   y<-5^2
   z<-7 \ 2
   
   escreval("2 * 3= " , x )
   escreval("5 ^ 2= " , y )
   escreval("7 \ 2= " , z )
   
//Entrada de Dados - Cmd leia
   
   escreval("Digite sua idade: ")
   leia(idade)
   
   escreval("Digite seu salario: ")
   leia(salario)
   
   escreval("Digite seu nome: ")
   leia(nome)
   
   escreval(idade, " ", salario, " ", nome)
   
//Operadores Relacionais- Devolvem true ou false

   limpatela
   escreval(a < b)
   escreval(a = b)
   escreval(b <> a + 1)
   escreval(a * 2 >= b)

Fimalgoritmo