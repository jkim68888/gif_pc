//header fixed
$(document).ready(function(){
    $(window).scroll(function(){   
        if($(window).scrollTop() > 220){   
            $('header').addClass("fixed");
        }else{  
            $('header').removeClass("fixed"); 
        }  
    });    
});
