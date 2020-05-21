function myFunction(x) {
    if (x.matches) { 
        revealPlayer();
    }
}

var x = window.matchMedia("(max-width: 992px)")
    myFunction(x)
    x.addListener(myFunction)

