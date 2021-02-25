$(document).ready(function(){
    $.ajax({
        url: "/js/movie.json",
        dataType: "json",
        success: function(data){
            var movieData = data.movie;
            
            // 상영 예정작
            var futureMovieArrayData = movieData.filter(function (movie) {
                return movie.isOpen == 'FALSE';
            });
            var searchParams = new URLSearchParams(window.location.search);
            var movieIndex = searchParams.get('movieIndex');
            var futureMovieData = futureMovieArrayData[movieIndex];
            
            //getFutureDetail 선언
            function futureDetailPrint(futureMovieData){
                var $name = futureMovieData.name;
                var $like = futureMovieData.like;
                var $rate = futureMovieData.rate;
                var $grade = futureMovieData.grade;
                var $img = futureMovieData.img;
                var $descript = futureMovieData.descript;
                var $date = futureMovieData.date;
                var $genre = futureMovieData.genre;
                var $director = futureMovieData.director;
                var $actors = futureMovieData.actors;
                var $trailer = futureMovieData.trailer;
                var $stillcut01 = futureMovieData.stillcut01;
                var $stillcut02 = futureMovieData.stillcut02;
                var $stillcut03 = futureMovieData.stillcut03;

                $('.name').text($name);
                $('.like a').text($like);
                $('.rate p').text($rate);
                $('.grade p').text($grade + " 점");
                $('.posterImg').attr({ 
                    src: $img
                });
                $('.descript').text($descript);
                $('.date').text("개봉일: " + $date);
                $('.genre').text("장르: " + $genre);
                $('.director').text("감독: " + $director);
                $('.actors').text("배우: " + $actors);
                $('.trailer').attr({ 
                    src: $trailer
                });
                $('.stillcut01 img').attr({ 
                    src: $stillcut01
                });
                $('.stillcut02 img').attr({ 
                    src: $stillcut02
                });
                $('.stillcut03 img').attr({ 
                    src: $stillcut03
                });
                
                var likeBtn = "#titleBox .like a";
                
                $(likeBtn).click(function(e){
                    e.preventDefault();

                    $(this).parent().removeClass("first");
                    $(this).parent().addClass('active');
                    $(this).addClass('active');
                    $(this).css('cursor', 'default');
                    $(likeBtn).text($like + 1);
                    
                });
            }
            
            futureDetailPrint(futureMovieData);
            
        },
        error: function(){
            $('#titleBox').append('데이터를 가져오지 못했습니다. 고객센터에 문의하세요.');
        }
    });
});