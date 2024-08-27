function VerMenu() {
    let menu = document.querySelector(".menu")
    let BtnMenu = document.querySelector("#BtnMenu")

    if (menu.classList.contains("RmvMenu")) {
        menu.classList.remove("RmvMenu")
        menu.classList.add("AddMenu")

        BtnMenu.style.marginTop = "-90vh"
        BtnMenu.style.marginLeft = "8vw"
        menu.style.display = "block"
        menu.style.fontFamily = "Arial"
        menu.style.paddingLeft = "1%"

        let home = '<a href="#" class="home"><img width="40" height="40" src="https://img.icons8.com/ios-glyphs/48/FFFFFF/home.png" alt="home" /></a>'

        let carrinho = '<a href="#" class="carrinho"><img width="40" height="40" src="https://img.icons8.com/ios-glyphs/40/FFFFFF/shopping-cart.png" alt="shopping-cart"/></a>'

        let login = '<a href="#" class="login"><img width="40" height="40" src="https://img.icons8.com/ios-glyphs/48/FFFFFF/guest-male.png" alt="guest-male"/></a>'

        let osso = '<a href="#" class="osso"><img width="40" height="40" src="https://img.icons8.com/ios-filled/50/FFFFFF/dog-bone.png" alt="dog-bone"/></a>'

        let gato = '<a href="#" class="gato"><img width="40" height="40" src="https://img.icons8.com/ios-filled/50/FFFFFF/pet-commands-stay.png" alt="pet-commands-stay"/></a>'

        let config = '<a href="#" class="config"><img width="40" height="40" src="https://img.icons8.com/ios-filled/50/FFFFFF/settings-3.png" alt="settings-3"/></a>'



        var text = menu.innerHTML = home + gato + osso + carrinho + login + config

        text.id = "campoMenu"
    }
    else {
        menu.classList.remove("AddMenu")
        menu.classList.add("RmvMenu")
        BtnMenu.style.marginLeft = "0"
        BtnMenu.style.marginTop = "0"
    }
}

