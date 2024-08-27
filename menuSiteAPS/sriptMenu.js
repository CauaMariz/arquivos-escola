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

        let home='<a href="#" class="home"><img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/home.png" alt="home"/></a>' 

        let carrinho='<a href="#" class="carrinho"><img src="https://img.icons8.com/fluency-systems-regular/48/shopping-cart--v1.png" alt="" width="40" height="40"></a>' 
        
        let login='<a href="#" class="login"><img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/user-male-circle.png" alt="user-male-circle"/></a>' 

        var text=menu.innerHTML = home + carrinho + login
        
        
        
        text.id="campoMenu"
       
    }
    else {
        menu.classList.remove("AddMenu")
        menu.classList.add("RmvMenu")
        BtnMenu.style.marginLeft = "0"
        BtnMenu.style.marginTop = "0"
        text.style.opacity="0"
        
    }
}