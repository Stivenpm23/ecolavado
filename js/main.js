$(function(){
    $('#bot1').click(function(e) {
        e.preventDefault();
        if(!$(this).hasClass('activo')){
             $(this).addClass('activo');
           $(".conten-sp .caja1 .wrap img").attr("src","img/clic-lavadora-hover.png");
            $('.caja1 .bloque-blanco').show();
        }else{
             $(this).removeClass('activo');
            $(".conten-sp .caja1 .wrap img").attr("src","img/clic-lavadora.png");
            $('.caja1 .bloque-blanco').hide();
        }       
    });
      $('#bot2').click(function(e) {
        e.preventDefault();
        if(!$(this).hasClass('activo')){
           $(this).addClass('activo');
           $(".conten-sp .caja2 .wrap img").attr("src","img/clic-remojo-hover.png");
            $('.caja2 .bloque-blanco').show();
        }else{
             $(this).removeClass('activo');
             $(".conten-sp .caja2 .wrap img").attr("src","img/clic-remojo.png");
               $('.caja2 .bloque-blanco').hide();
        }
    });
      $('#bot3').click(function(e) {
        e.preventDefault();
        if(!$(this).hasClass('activo')){
           $(this).addClass('activo');
           $('.caja3 .bloque-blanco').show();
           $(".conten-sp .caja3 .wrap img").attr("src","img/clic-caneca-hover.png");
        }else{
             $(this).removeClass('activo');
            $(".conten-sp .caja3 .wrap img").attr("src","img/clic-caneca.png");
               $('.caja3 .bloque-blanco').hide();
        }
    });
      $('#bot4').click(function(e) {
        e.preventDefault();
        if(!$(this).hasClass('activo')){
           $(this).addClass('activo');
           $(".conten-sp .caja4 .wrap img").attr("src","img/clic-remojo-platon-hover.png");
           $('.caja4 .bloque-blanco').show();
        }else{
             $(this).removeClass('activo');
             $(".conten-sp .caja4 .wrap img").attr("src","img/clic-remojo-platon.png");
            $('.caja4 .bloque-blanco').hide();
        }
    });
    
      $('#active1').click(function() {
           $('.menu ul li #active1').addClass('menu-active');
       });

    //Menu mobile
    $(document).ready(main);

    var contador = 1;

    function main(){
        $('.menu_bar').click(function(){
            // $('nav').toggle();

            if(contador == 1){
                $('nav').animate({
                    left: '0'
                });
                contador = 0;
            } else {
                contador = 1;
                $('nav').animate({
                    left: '-100%'
                });
            }

        });

    };
    $('.ancla').click(function(e){
        e.preventDefault();
        var link = $(this);
        var anchor  = link.attr('href');
        $('html, body').stop().animate({
            scrollTop: jQuery(anchor).offset().top
        }, 800);
        return false;
    });
    $(function(){
        $(window).scroll(function(){
            if ($(window).scrollTop() < 30)
            {
                $("#ancla").fadeOut();
            }
            else
            {
                $("#ancla").fadeIn();
            }
        });
    });

});