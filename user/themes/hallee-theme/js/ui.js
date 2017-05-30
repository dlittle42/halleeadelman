$(window).load(function(){ 



    var layout   = document.getElementById('layout'),
        menu     = document.getElementById('menu'),
        menuLink = document.getElementById('menuLink'),
        content  = document.getElementById('main');

    console.log(menuLink)

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

})
