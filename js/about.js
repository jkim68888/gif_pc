$(document).ready(function(){
    $(window).scroll(function(){
        if($(window).scrollTop()>0){
            $('.text h3, .text p').addClass('active');
        }else{
            $('.text h3, .text p').removeClass('active');
        }
    }); 
});