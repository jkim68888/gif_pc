$(document).ready(function(){
    $.ajax({
        url: "/js/movie.json",
        dataType: "json",
        success: function(data){
            var movieData = data.movie;
        
            // 현재 상영작
            var currentMovieArrayData = movieData.filter(function (movie) {
                return movie.isOpen == 'TRUE';
            });
            var searchParams = new URLSearchParams(window.location.search);
            var movieIndex = searchParams.get('movieIndex');
            var currentMovieData = currentMovieArrayData[movieIndex];
            
            //getCurrentDetail 선언
            function currentDetailPrint(currentMovieData){
                var $name = currentMovieData.name;
                var $like = currentMovieData.like;
                var $rate = currentMovieData.rate;
                var $grade = currentMovieData.grade;
                var $img = currentMovieData.img;
                var $descript = currentMovieData.descript;
                var $date = currentMovieData.date;
                var $genre = currentMovieData.genre;
                var $director = currentMovieData.director;
                var $actors = currentMovieData.actors;
                var $trailer = currentMovieData.trailer;
                var $stillcut01 = currentMovieData.stillcut01;
                var $stillcut02 = currentMovieData.stillcut02;
                var $stillcut03 = currentMovieData.stillcut03;

                $('.name').text($name);
                $('.like a').text($like);
                $('.rate p').text($rate);
                $('.grade p').text($grade + " 점");
                $('.posterImg').attr({ 
                    src: $img, 
                    alt: "영화 포스터 이미지"
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

                    $(this).parent().removeClass('first');
                    $(this).parent().addClass('active');
                    $(this).addClass('active');
                    $(this).css('cursor', 'default');
                    $(likeBtn).text($like + 1);
                    
                });
            }
            
            currentDetailPrint(currentMovieData);
            
        },
        error: function(){
            $('#titleBox').append('데이터를 가져오지 못했습니다. 고객센터에 문의하세요.');
        }
    });
});












