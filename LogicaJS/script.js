function Ver() {
    
    let num = document.querySelector('#Num').value;
    let campo = document.querySelector("#campo")

    function Fatorial() {
        let contador = 1
        fator = 1

        for (contador; contador <= num; contador++) {
            fator *= contador 
        }
        campo.innerHTML = `O fatorial de ${num} é ${fator}`
    }


    isNaN(num) || num < 0 ? alert("Verifique se o número digitado é um número válido")  : Fatorial()
}