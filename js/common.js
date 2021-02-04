//header fixed
$(document).ready(function(){
    $(window).scroll(function(){   
        if($(window).scrollTop() > 45){   
            $('header').addClass("fixed");
        }else{  
            $('header').removeClass("fixed"); 
        }  
    });    
});

//subNav
$(document).ready(function(){
    var bg = $('<div class="subBg"></div>');
    var speed = 'fast';
    
    $('header').append(bg);
    $('.subBg').slideUp(0);
    $('.subNav').fadeOut(0);
    
    $('.mainNav').mouseenter(function(){
        $(this).next().stop().fadeIn(speed);
        $('.subBg').stop().slideDown(speed);
        
        $(this).parent().mouseleave(function(){
            $(this).children('.subNav').stop().fadeOut(0);
            $('.subBg').stop().slideUp(speed);
        });
    });

    $('.mainNav').focus(function(){
        $('.mainNav').removeClass('fixed');
        $(this).addClass('fixed');
        
        var is = $(this).next().is(':hidden');
        
        if(is){
            $('.subNav, .subBg').stop().slideUp(0);
            $(this).next().stop().slideDown(speed);
            $('.subBg').stop().slideDown(speed);
        }
    });

    $('.subNav li:last a').keydown(function(e){
        if(e.keyCode == 9){ 
            if(!e.shiftKey){ 
                $('.subNav, .subBg').stop().slideUp(speed);
            }
        }
    });
    
    $('.mainNav').first().keydown(function(e){
        if(e.keyCode == 9){ 
            if(e.shiftKey){ 
                $('.mainNav').removeClass('fixed');
                $('.subNav, .subBg').stop().slideUp(speed);
            }
        }
    });
});

//scrollTop
$(document).ready(function(){
    var btn = '.scrollTop a';
    var speed = 1200; 
    var easing = 'easeOutQuart';
    var minWidth = 1180; 
    var btnWidth = $(btn).width();
    var w = minWidth + (2 * btnWidth) + 20; 
    
    $(window).scroll(function(){
       
        var top = $(window).scrollTop(); 
        var wWidth = $(window).width(); 
        
        if(top < 200 || wWidth < w){
            $(btn).parent().fadeOut(400);
        }else{
            $(btn).parent().fadeIn(400);
        }
    });
    
    //리사이즈이벤트
    $(window).resize(function(){
        $(window).trigger('scroll'); 
    });
   
    $(btn).click(function(e){
        e.preventDefault(); 
        
        $('html, body').stop().animate({
            scrollTop: 0 
        },speed,easing);
    });
    
});

//nonMember
$(document).ready(function(){
    $('.tNav .last a').colorbox({
        width: 950,
        height: 600,
        iframe: true,
        scrolling: false, 
    });
});



























