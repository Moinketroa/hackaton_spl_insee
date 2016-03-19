$(document).ready(function() {  
    

    /* Menu */
     $(window).scroll(function() {
        if ($(".navbar-menu").offset().top > 50) {
            $("header").addClass("push");
        } else {
            $("header").removeClass("push");
        }
    });



    /* Parallax */
    
    $('.parrallax-layer img').each(function(){
        $(this).css('margin-left',"-"+($(this).width()-$(window).width())/2+"px");
    });
    $(window).resize(function(){
        $('.parrallax-layer img').each(function(){
            $(this).css('margin-left',"-"+($(this).width()-$(window).width())/2+"px");
        });
    });
    
    
    $(document).mousemove(function(e){

        $('.parrallax-layer').each(function(){

            var x = -((e.pageX - $(window).width()/2)/10) * parseInt($(this).data('delta'))/100;
            //var y = -((e.pageY + this.offsetLeft) / 30) * parseInt($(this).data('delta'))/100;

            $(this).css('transform', 'translate3d('+x + 'px, ' + 0 + 'px, 0px)');
        })

    });
    





    var sideslider = $('[data-toggle=collapse-side]');
    var sel = sideslider.attr('data-target');
    var cont = sideslider.attr('data-container');
    sideslider.click(function(event){
        $(sel).toggleClass('in');
        $(cont).toggleClass('in');
        $(sideslider).toggleClass('toggled');
    });
});


   