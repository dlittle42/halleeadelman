if(location.hash){
    $(window).scrollTop(0); //stop jump to hash straight away
    setTimeout(function(){
        //stop jump to hash again a bit later
        //for browser compatibility
        $(window).scrollTop(0);
    },1);
 
}


$(window).load(function(){ 



    var layout   = document.getElementById('layout'),
        menu     = document.getElementById('menu'),
        menuLink = document.getElementById('menuLink'),
        mailLink = document.getElementById('mailLink'),
        content  = document.getElementById('main');



    if(location.hash){

        $('html, body').animate({
               'scrollTop':   $('#contact').offset().top
             }, 500);
            
        }

    function toggleClass(element, className) {
        var classes = element.className.split(/\s+/),
            length = classes.length,
            i = 0;

        for(; i < length; i++) {
          if (classes[i] === className) {
            classes.splice(i, 1);
            break;
          }
        }
        // The className is not found
        if (length === classes.length) {
            classes.push(className);
        }

        element.className = classes.join(' ');
    }

    function toggleAll(e) {
        var active = 'active';

        e.preventDefault();
        toggleClass(layout, active);
        toggleClass(menu, active);
        toggleClass(menuLink, active);
    }

    menuLink.onclick = function (e) {
        toggleAll(e);
    };

    content.onclick = function(e) {
        if (menu.className.indexOf('active') !== -1) {
            toggleAll(e);
        }
    };


    $('.list-blog-padding p').each(function(){
        var alt = $(this).children('img').attr('alt');
        console.log(alt)
        var img = $(this).find('img');;
        if (alt=='gallery'){
            $(this).addClass('gallery')
            img.wrap('<div class="gallery-image"></div>')
        } 
       // $(this).append('<div class="caption">' + alt + '</div>');
    });

    mailLink.onclick = function (e) {
        
        if ($('body').hasClass('home')){
            e.preventDefault();
           
            $('html, body').animate({
               'scrollTop':   $('#contact').offset().top
             }, {
                duration: 500,
                complete: function () {
                     location.hash = "#contact";

                 }
            });
        }

        
    }


})
