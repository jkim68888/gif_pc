$(document).ready(function(){
    var dateBtn = '.dateBox a';
    var movieBtn = '.movieBox .tab a';
    var today = new Date();
    var date = today.getDate();
    var month = today.getMonth();
    var year = today.getYear();
    var week = ['일', '월', '화', '수', '목', '금', '토'];
    var next = '.nextBtn';
    var prev = '.prevBtn';
    var lastday = function(y,m){ return  new Date(y, m +1, 0).getDate(); };
    var mContent = '.movieBox .movieWrap';
    var tContent = '.timeBox .timeWrap';
    
    //날짜 초기실행
    for(i=0;i<7;i++){
        var day = week[(today.getDay()+i)%7];
        var newDate = date+i;

        for(j=0;j<7;j++){

            if(newDate == lastday(year,month)+j+1){
                newDate = j+1;
                $(dateBtn).eq(i).text(('00' + newDate).slice(-2) + '일 ' + day);
            }else{
                $(dateBtn).eq(i).text(('00' + newDate).slice(-2) + '일 ' + day);
            }

        }
    }
    
    //날짜 next버튼 클릭했을때
    $(next).find('a').click(function(e){
        e.preventDefault();
       
        for(i=0;i<7;i++){
            var day = week[(today.getDay()+i)%7];
            var newDate = (date+7+i) % lastday(year,month);
                
            for(j=0;j<7;j++){
               
                if(newDate == lastday(year,month)+j+1){
                    newDate = date + j+1;
                    $(dateBtn).eq(i).text(('00' + newDate).slice(-2) + '일 ' + day);
                }else{
                    $(dateBtn).eq(i).text(('00' + newDate).slice(-2) + '일 ' + day);
                }
               
            }
        }
       
        $(next).stop().fadeOut('fast');
        $(prev).stop().fadeIn('fast');
        $('.today').stop().fadeOut('fast');
        $(dateBtn).removeClass('active');
        
        $('.movieBox .list').remove();
        $('.timeBox .list').remove();
        $('.text').stop().fadeIn('fast');
        
    });
    
    //날짜 prev버튼 클릭했을때
    $(prev).find('a').click(function(e){
        e.preventDefault();
       
        for(i=0;i<7;i++){
            var day = week[(today.getDay()+i)%7];
            var newDate = date+i;
           
            for(j=0;j<7;j++){
               
                if(newDate == lastday(year,month)+j+1){
                    newDate = j+1;
                    $(dateBtn).eq(i).text(('00' + newDate).slice(-2) + '일 ' + day);
                }else{
                    $(dateBtn).eq(i).text(('00' + newDate).slice(-2) + '일 ' + day);
                }
               
            }
        }
       
        $(prev).stop().fadeOut('fast');
        $(next).stop().fadeIn('fast');
        $('.today').stop().fadeIn('fast');
        $(dateBtn).removeClass('active');
        
        $('.movieBox .list').remove();
        $('.timeBox .list').remove();
        $('.text').stop().fadeIn('fast');
        
    });
    
    //날짜 선택했을때
    $(dateBtn).click(function(e){
        e.preventDefault();
        $(dateBtn).removeClass('active');
        $(this).addClass('active');
        
        $('.movieBox .list').remove();
        $('.timeBox .list').remove();
    });
   
    $.ajax({
        url: "/js/ticketing.json",
        dataType: "json",
        success: function(data){
            var dataArray = [data.day01,data.day02,data.day03,data.day04,data.day05,data.day06,data.day07,data.day08,data.day09,data.day10,data.day11,data.day12,data.day13,data.day14,data.day15,data.day16,data.day17,data.day18,data.day19,data.day20,data.day21,data.day22,data.day23,data.day24,data.day25,data.day26,data.day27,data.day28,data.day29,data.day30,data.day31];
           
            //moviePrint선언
            function moviePrint(dateIndex){
                if(dataArray[dateIndex].length > 0){
                   
                    var ul = $('<ul class="list" />');
                   
                    for(var movieIndex in dataArray[dateIndex]){
                       
                        var li = $('<li />');
                        var a = $('<a />');
                        a.attr("data-dateIndex", dateIndex);
                        a.attr("data-movieIndex", movieIndex);
                       
                        var $age = dataArray[dateIndex][movieIndex].age;
                        var $name = dataArray[dateIndex][movieIndex].name;
                       
                        a.append(
                            $('<h5 class="age" />').text($age),
                            $('<p class="name" />').text($name)
                        );
                       
                        li.append(a);
                        ul.append(li);
                    }
                   
                   
                    $('.movieBox .tab').append(ul);
                }
            }
            
            //timePrint선언
            function timePrint(timeBoxData){
                if(timeBoxData.length > 0){
                    var ul = $('<ul class="list" />');
                    var div = $('<div />');

                    $('.timeWrap').append(div);
                    div.append(ul);

                    for(var movieIndex in timeBoxData){
                        var li = $('<li />');
                        var a = $('<a />');

                        ul.append(li);
                        li.append(a);

                        a.append(
                            $('<h5 />').text(timeBoxData[movieIndex].time),
                            $('<h6 />').text(timeBoxData[movieIndex].cinemaNum),
                            $('<p class="total" />').text('좌석수: ' + timeBoxData[movieIndex].totalSeat),
                            $('<p class="available" />').text('남은좌석: ' + timeBoxData[movieIndex].available)
                        );
                    }

                }
            }
            
            //날짜선택했을때
            $(dateBtn).click(function(e){
                e.preventDefault();

                $(dateBtn).removeClass('active');
                $(this).addClass('active');
                $('.text').css('display', 'none');
               
                var index = $(this).index();
                var num = $(this).text().replace(/[^0-9]/g,'');

                $(mContent).find('> div').stop().fadeOut('fast');
                $(mContent).find('> div').eq(index).stop().fadeIn('fast');
                $('.movieBox .list').remove();  
               
                if(num.startsWith('0')){
                    moviePrint(num.slice(-1)-1);
                }else{
                    moviePrint(num-1);
                }
                
                //날짜 선택후, 영화선택했을때
                $(movieBtn).click(function(e){
                    e.preventDefault();
                    var dateIndex = $(this).attr('data-dateIndex');
                    var movieIndex = $(this).attr('data-movieIndex');
                    var timeBoxData = dataArray[dateIndex][movieIndex].timeBox;


                    $(movieBtn).removeClass('active');
                    $(this).addClass('active');
                    $('.text').css('display', 'none');

                    $(tContent).find('> div').stop().fadeOut('fast');
                    $(tContent).find('> div').eq(dateIndex).stop().fadeIn('fast');
                    $('.timeBox .list').remove();  

                    timePrint(timeBoxData);

                    var timeBtn = $('.timeBox a');

                    //날짜와 영화 선택후, 시간선택했을때
                    $(timeBtn).click(function(e){
                        e.preventDefault();
                        alert('현재 서비스 점검중이라서 예매할 수 없습니다. 다음에 다시 이용부탁드립니다.');
                        $('.movieBox .list').remove();
                        $('.timeBox .list').remove(); 
                        $('.text').stop().fadeIn('fast');
                        $(dateBtn).removeClass('active');
                    });

                });
           
            });
        },
        error: function(){
            $('.movieBox .tab').append('데이터를 가져오지 못했습니다. 고객센터에 문의해주세요.');
        }
    });
});












