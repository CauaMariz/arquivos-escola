function enviar(){
    var nome=document.getElementById('email').value
    var senha=document.getElementById('senha').value
    var campo=document.getElementById('campo')
    nome.length
    senha.length
    if (nome.length<8){
        alert('Nome menor que 8 caracteres')
        location.reload()
    }
    if (senha.length<8){
        alert('Senha menor que 8 caracteres')
        location.reload()
    }
    campo.innerHTML=(`Seu nome é (<strong>${nome}</strong>) e sua senha é (<strong>${senha}</strong>). Guarde estes dados`)
}


function limpar(){

    location.reload()
}
function limpardados(){
    
}

