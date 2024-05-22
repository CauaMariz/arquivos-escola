Algoritmo "terreno4"

Var
    largura: inteiro
    compri: inteiro
    perimetro: real
    preco: real
    precouni: real
    imposto: real
    precofinal: real

Inicio
    escreval("Digite a largura:")
    leia(largura)
    escreval("Digite o comprimento:")
    leia(compri)
    escreval("Digite o preço unitário:")
    leia(precouni)

    perimetro <- 2 * (largura + compri)
    preco <- (precouni)*(largura+compri)

    precofinal <- preco + (17.42 * preco)/100

    escreval("Perímetro:", perimetro, "m")
    escreval("Preço sem imposto: R$", preco)
    escreval("Imposto: R$", imposto * preco)
    escreval("Preço final: R$", precofinal)
Fim
