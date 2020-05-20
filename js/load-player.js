function myFunction(x) {
    if (x.matches) { 
        revealPlayer();
    }
}

var x = window.matchMedia("(max-width: 992px)")
    myFunction(x)
    x.addListener(myFunction)

function revealPlayer() {
    var iframe = document.createElement('iframe');
    iframe.src = "https://www.youtube.com/embed/9Sf278j1GTU";
    iframe.id = "embed";
    iframe.name = "link";
    iframe.frameBorder = "0";
    iframe.allow = "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture";
    iframe.allowFullscreen = true;
    document.querySelector('.video-section .video').appendChild(iframe);
}