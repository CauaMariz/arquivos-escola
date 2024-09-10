
function Enviar(){

    let nome=document.querySelector("#nome").value
    let altura=Number(document.querySelector("#altura").value)
    let peso=Number(document.querySelector("#peso").value)
    
    let campo=document.querySelector("#campo")
    
    let imc=peso/ (altura*altura)
    campo.innerHTML=`Seu IMC é  ${imc.toFixed(2)}`

    if (imc < 18.5){
        campo.innerHTML+=' <br> Magreza'
    }
    else if (imc < 24.9){
        campo.innerHTML+=' <br> Normal '
    } 
    else if(){}
    else if(){}
    else if(){}
    else if(){}
    else if(){}
}