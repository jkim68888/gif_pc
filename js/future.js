$(document).ready(function(){
    $.ajax({
        url: "/js/movie.json",
        dataType: "json",
        success: function(data){
            var movieData = data.movie;
            
            var futureMovieData = movieData.filter(function (movie) {
                return movie.isOpen == 'FALSE';
            });
            
            //futurePrint 선언
            function futurePrint(futureMovieData){
                if(futureMovieData.length > 0){
                    var ul = $('<ul />');
                    for(var movieIndex=0; movieIndex<futureMovieData.length; movieIndex++){
                        var li = $('<li />');
                        var img = $('<a class="imgBox" />');
                        var h3 = $('<h3 />');
                        var $img = futureMovieData[movieIndex].img;
                        var $age = futureMovieData[movieIndex].age;
                        var $name = futureMovieData[movieIndex].name;
                        var $rate = futureMovieData[movieIndex].rate;
                        var $grade = futureMovieData[movieIndex].grade;
                        var a = $('<a class="viewMore" />');
                        a.attr('href', 'futureDetail.php?movieIndex=' + movieIndex);
                            
                        li.append(
                            $(img).append($('<img />').attr({
                                src: $img,
                                alt: '상영예정작 영화 포스터 이미지'
                            })),
                            a.text('자세히보기'),
                            $(h3).text($age + '세'),
                            $('<h4 />').text($name),
                            $('<p class="rate" />').text('예매율 ' + $rate),
                            $('<p class="grade" />').text('평점 ' + $grade + '점')
                        );
                        
                        if($age == 12){
                            $(h3).css('background-color', 'yellow');
                        }else if($age == 15){
                            $(h3).css('background-color', 'green');
                        }else{
                            $(h3).css('background-color', 'red');
                        }
                        
                        $(ul).append(li);
                    
                    }
        
                    $('#futureMovie').append(ul);
                }
            }
            
            //상영예정작 출력
            futurePrint(futureMovieData);
        },
        error: function(error){
            $('#futureMovie').append('데이터를 가져오지 못했습니다. 고객센터에 문의하세요.');
        }
    });
});