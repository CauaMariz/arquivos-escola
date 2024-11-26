//crio uma variavel que vai guardar a imagem do mario
const mario = document.querySelector('.mario')

//guardando a imagem em uma variavel pipe
const pipe = document.querySelector('.pipe')

//armazenando as nuvens em uma variavel 
const cloud = document.querySelector('.clouds')

//crio uma funcao seta (arrow function)
const jump = () => {
    //aqui ele vai adicionar a classe jump do css na imagem do mario fazendo ele pular

    mario.classList.add('jump');
    setTimeout(() => {
        //removo a classe para poder colocar novamente ao clicar qualquer tecla
        mario.classList.remove('jump');
    }, 500);
};

//ao precionar a tecla, chamo a funcao seta jump
document.addEventListener('keydown', jump)
let gameovermsg = document.querySelector('.gameOverMsg')

const loop = setInterval(() => {
    const pipePosition = pipe.offsetLeft
    const marioPosition = +getComputedStyle(mario).bottom.replace("px", "")
    const nuvensPosition=cloud.offsetLeft

    if (pipePosition <= 110 && marioPosition < 110 && pipePosition > 0) {
        pipe.style.animation = 'none'
        mario.src = 'images/game-over.png'

        pipe.style.left = `${pipePosition}px`
        mario.classList.remove('jump')
        nuvensPosition.style.left=`${nuvensPosition}px`
        
        mario.style.width = '70px'

        cloud.style.animation='none'

        gameovermsg.style.display = 'block'
        
        mario.classList.add("loopMario")
    }


}, 10)