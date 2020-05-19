$(document).ready(function() {
    $('#start-course').on('click', function() {

        $('#first-section').css("padding", "85px 0 10px 0"); 
        $('#video-player').show();

        if (this.hash!=null){
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
        if (target.length) {
          $('html,body').animate({
              scrollTop: target.offset().top
          }, "slow");
          return false;
        };   
    }    
    });
});

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
