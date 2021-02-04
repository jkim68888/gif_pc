//메인페이지 새로고침
$(document).ready(function(){
    setTimeout(function(){
        scrollTo(0,0);
    },100);
});

//popup
$(document).ready(function(){
    var popup = '#popup';
    var speed = 500;
    
    $(popup).slideUp(0);
    $(popup).slideDown(speed);
    
    function setCookie(name, value, expiredays){  
        var todayDate = new Date();
        todayDate.setDate( todayDate.getDate() + expiredays );
        document.cookie = name + '=' + escape( value ) + '; path=/; expires=' + todayDate.toGMTString() + ';';
    };
    
    function closeWin() {   
        if ( $('#chk').prop('checked') == true){ 
            setCookie( 'maindiv', 'done', 1 );
        }
        $(popup).slideUp(speed);
    };
    
    cookiedata = document.cookie;
    
    if(cookiedata. indexOf('maindiv=done') < 0 ){ 
        $(popup).css('display','block');
    }else{                                 
        $(popup).css('display','none');  
    }
    $(popup).find('a').click(function() {  
        closeWin();   
    });
});

//mSlider
$(document).ready(function(){
    var play = '#mSlider .playBtn a';
    var pause = '#mSlider .pauseBtn a';
    
    var swiper = new Swiper('#mSlider .swiper-container', {
        slidesPerView: 1,
        loop: true,
        autoplay: {
            delay: 6000,
        },
        pagination: {
            el: '#mSlider .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '#mSlider .swiper-button-next',
            prevEl: '#mSlider .swiper-button-prev',
        },
    });
    
    $(play).click(function(e){
        e.preventDefault();
        swiper.slideNext(400);
        swiper.autoplay.start();
        $(pause).removeClass('active');
        $(this).addClass('active');
    });

    $(pause).click(function(e){
        e.preventDefault();
        swiper.autoplay.stop();
        $(play).removeClass('active');
        $(this).addClass('active');
    });
   
});

//guide
$(document).ready(function(){
    $('#guide .confirm a').click(function(e){
        e.preventDefault();
        alert('예매확인은 로그인이 필요한 페이지입니다.');
    });
});

//event
$(document).ready(function(){
    var play = '#event .box01 .playBtn a';
    var pause = '#event .box01 .pauseBtn a';
    var img = '#event img';
    var easing = 'easeOutQuart';
    
    var swiper01 = new Swiper('.box01 .swiper-container', {
        loop: true,
        autoplay: {
            delay: 4000,
        },
        navigation: {
            nextEl: '.box01 .swiper-button-next',
            prevEl: '.box01 .swiper-button-prev',
        },
        pagination: {
            el: '.box01 .swiper-pagination',
            type: 'progressbar',
            clickable: true,
        },
    });
    
    $(play).click(function(e){
        e.preventDefault();
        swiper01.slideNext(400);
        swiper01.autoplay.start();
    });

    $(pause).click(function(e){
        e.preventDefault();
        swiper01.autoplay.stop();
    });
    
    var swiper02 = new Swiper('.box02 .swiper-container', {
        loop: true,
        effect : 'fade',
        autoplay: {
            delay: 4500,
        },
        navigation: {
            nextEl: '.box02 .swiper-button-next',
            prevEl: '.box02 .swiper-button-prev',
        },
        pagination: {
            el: '.box02 .swiper-pagination',
            clickable: true,
        },
    }); 
    
    $(img).hover(function(){
        $(this).removeClass('off');
        $(this).addClass('on');
    },function(){
        $(this).addClass('off');
        $(this).removeClass('on');
    });
    
});

//notice
$(document).ready(function(){
    var list = '#notice ul'; 
    var time = 3500; 
    var speed = 'fast';
    var h = $(list).find('li').outerHeight(); 
    $(list).find('li:first a').attr('tabindex','0');
    
    var topMove = function(){
        $(list).stop().animate({
            top: '-=' + h
        },speed,function(){
            $(list).find('li').first().appendTo(list);
            $(list).css('top',0);
            $(list).find('li a').attr('tabindex','-1'); 
            $(list).find('li:first a').attr('tabindex','0'); 
        });
    };
    
    var listMove = setInterval(topMove,time);
    
    $(list).find('li a').on('mouseenter focus',function(){
        clearInterval(listMove);
    });
    
    $(list).find('li a').on('mouseleave blur',function(){
        listMove = setInterval(topMove,time);
    });
});

//org
$(document).ready(function(){
    var btn = '#org .playPause a';
    
    var swiper = new Swiper('#org .swiper-container', {
        loop: true,
        autoplay: {
            delay: 3200,
        },
        slidesPerView: 2.35,
        spaceBetween: 40,
        navigation: {
            nextEl: '#org .swiper-button-next',
            prevEl: '#org .swiper-button-prev',
        },
    });
    
    $(btn).click(function(e){
        e.preventDefault();
        
        if($(btn).hasClass("stop")) {
            $(btn).removeClass('stop'); 
            swiper.slideNext(400);
            swiper.autoplay.start();
        } else {
            $(btn).addClass('stop');  
            swiper.autoplay.stop();
        }
    });
    
});

//mobile - 모바일기기장치에서 접속시 모바일주소(http://mcinema68888.dothome.co.kr)이동
$(document).ready(function(){
    var mobile_keys = new Array('iPhone','iPad','Android','BlackBerry','Windows Phone','Windows CE','LG','MOT','SAMSUNG','SonyEricsson','Nokia');
    
    if(document.URL.match('move_pc_screen')){
        $('.mobileBtn').fadeIn(0);
        mobile_keys = null; 
    }

    for(var i in mobile_keys){
        if(navigator.userAgent.match(mobile_keys[i]) != null){ 
            location.href = 'http://mcinema68888.dothome.co.kr';
        }
    }
});



















