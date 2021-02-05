//모두 체크 동의
$(document).ready(function(){
    $('#allChk').change(function(){
        var chk = $(this).prop('checked');
        if(chk){
            $('.checkBox input').prop('checked',true);
        }else{
            $('.checkBox input').prop('checked',false);
        }
    });
    $('.checkBox input').change(function(){
        var chk01 = $('#agreeChk01').prop('checked');
        var chk02 = $('#agreeChk02').prop('checked');

        if(chk01 && chk02 ){
            $('#allChk').prop('checked',true);
        }else{
            $('#allChk').prop('checked',false);
        }
    });
    
    $('.joinClause .nextBtn a').click(function(e){
        e.preventDefault(); 
        var chk01 = $('#agreeChk01').prop('checked');
        var chk02 = $('#agreeChk02').prop('checked');
        
        if(chk01 && chk02 ){
            location.assign('../tnav/joinForm.html#subTitle');
        }else{
            alert('모두 동의해주세요.');
        }
    });
});


//생년월일 처리
$(document).ready(function(){
    var yOutput = '';
    var mOutput = '';
    var dOutput = '';
    
    var today = new Date();
    var tYear = today.getFullYear();
    
    for(var i=tYear;i>=1900;i--){
        yOutput += '<option>' + i + '</option>';
    }
    for(var i=1;i<=12;i++){
        mOutput += '<option>' + i + '</option>';
    }
    
    $('#birth01').html(yOutput);
    $('#birth02').html(mOutput);
    
    function dateList(y,m){
        dOutput = ''; 
        
        var mArray = [31,28,31,30,31,30,31,31,30,31,30,31];
        
        //윤년
        if((y % 4 == 0 && y % 100 != 0) || y % 400 == 0){
            mArray[1] = 29;
        }
        
        for(var i=1;i<=mArray[m-1];i++){
            dOutput += '<option>' + i + '</option>';
        }
        
        $('#birth03').html(dOutput);
    }
    
    dateList(tYear,1);
    
    $('#birth01, #birth02').change(function(){
        var y = $('#birth01').val();
        var m = $('#birth02').val();
        
        dateList(y,m);
    });
});




//회원가입 전송 미처리 및 데이터 확인
$(document).ready(function(){
    $('#join_form').submit(function(e){
        e.preventDefault(); 
    });
    
    //비밀번호 확인
    $('#joinPwChk').blur(function(){
        var pw01 = $('#joinPw').val();
        var pw02 = $(this).val();
        
        if(pw01 != pw02){
            $('.joinClause .red').fadeIn(0);
        }else{
            $('.joinClause .red').fadeOut(0);
        }
    });
});

