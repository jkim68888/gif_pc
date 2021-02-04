$(document).ready(function(){
    var btn = '#faqBox .tabBar > ul';
    var content = '#faqBox .content';
    var easing = 'easeOutQuart';
    
    $(btn).find('li:first p').addClass('active');
    $(btn).find('li:first a').addClass('active');
    $(content).find('div:first').fadeIn(0);
    
    $(btn).find('a').click(function(e){
        e.preventDefault();
        $(btn).find('a').removeClass('active');
        $(this).addClass('active');
        var index = $(this).parent().index();
        $(content).find('div').stop().slideUp(easing);
        $(content).find('div').eq(index).stop().slideDown(easing);
    });
});