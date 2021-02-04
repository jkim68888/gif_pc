$(document).ready(function(){
    $.ajax({
        url: "/js/exhibit.json",
        dataType: "json",
        success: function(data){
            var exhibitMovieData = data.exhibit;
    
            //exhibitPrint 선언
            function exhibitPrint(exhibitMovieData){
                if(exhibitMovieData.length > 0){
                    var ul = $('<ul />');
                    for(var movieIndex=0; movieIndex<exhibitMovieData.length; movieIndex++){
                        var li = $('<li />');
                        var $img = exhibitMovieData[movieIndex].img;
                        var $title = exhibitMovieData[movieIndex].title;
                            
                        li.append(
                            $('<img />').attr({
                                src: $img,
                                alt: '기획전 포스터 이미지'
                            }),
                            $('<h3 />').text($title)
                        );
                        
                        $(ul).append(li);
                    }
        
                    $('#exhibitMovie').append(ul);
                }
            }
            
            //기획전 출력
            exhibitPrint(exhibitMovieData);
        },
        error: function(error){
            $('#exhibitMovie').append('데이터를 가져오지 못했습니다. 고객센터에 문의하세요.');
        }
    });
});