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
        e.preventDefault(); //기본이벤트 제거 - 페이지 이동되지 않게 처리
        var chk01 = $('#agreeChk01').prop('checked');
        var chk02 = $('#agreeChk02').prop('checked');
        
        if(chk01 && chk02 ){
            location.assign('../tnav/join_form.php#subTitle');
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
        dOutput = ''; //값의 초기화
        
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
    
    
    
    //회원가입 수정처리 - 생년월일 선택처리
    var bMonth = $('#bMonth').val();
    bMonth = Number(bMonth); //문자열을 숫자로 변경
    var bDate = $('#bDate').val();
    bDate = Number(bDate);
    var bYear = $('#bYear').val();
    bYear = Number(bYear);
    
    $('#birth02').find('option').eq(bMonth - 1).attr('selected','selected');
    $('#birth03').find('option').eq(bDate - 1).attr('selected','selected');
    
    
    //년도는 역순이고 1부터시작하지 않기 때문
    var bYearIndex; //DB에 있는 년도 텍스트와 같은 값을 갖고 있는 옵션태그의 인덱스번호
    
    $('#birth01 option').each(function(index){ //배열로 되어 있는 요소의 각각 명령을 주는 메서드
        var value = $(this).html(); //텍스트 담는 변수
        
        if(value == bYear){
            bYearIndex = $(this).index();
        }
    });
    
    $('#birth01').find('option').eq(bYearIndex).attr('selected','selected');
    
});




//회원가입 전송 미처리 및 데이터 확인
$(document).ready(function(){
    $('#joinForm').submit(function(e){//submit이벤트는 form태그만 갖을 수 있음
        e.preventDefault(); //폼이 갖고 있는 기본이벤트인 데이터전송이벤트를 제거
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
    
    //회원가입 버튼 클릭이벤트
    $('#submitBtn').click(function(){
        if(!$('#joinName').val()){
            alert("이름을 입력하세요");
            $('#joinName').focus(); //입력상자로 초점이 가라는 메서드
            return; //함수를 실행하는 도중에 호출하는 곳으로 보내면서 아래 코드가 전부 실행되지 않음
        }
        
        if(!$('#joinId').val()){
            alert("아이디를 입력하세요");
            $('#joinId').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#joinPw').val()){
            alert("비밀번호를 입력하세요");
            $('#joinPw').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#joinPwChk').val()){
            alert("비밀번호 확인을 입력하세요");
            $('#joinPwChk').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#postNum').val()){
            alert("우편번호를 입력하세요");
            $('#postNum').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#addr01').val()){
            alert("주소를 입력하세요");
            $('#addr01').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#addr02').val()){
            alert("나머지 주소를 입력하세요");
            $('#addr02').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#phone02').val()){
            alert("휴대폰 두번째 번호를 입력하세요");
            $('#phone02').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#phone03').val()){
            alert("휴대폰 세번째 번호를 입력하세요");
            $('#phone03').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#email01').val()){
            alert("이메일을 입력하세요");
            $('#email01').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        //비밀번호와 비밀번호이 맞지 않아도 경고창
        if($('#joinPw').val() != $('#joinPwChk').val()){
            alert('비밀번호가 일치하지 않습니다. \n다시입력하세요');
            $('#joinPw').focus();
            return;
        }
        
        //위의 조건이 다 해결되면 데이터를 insert.php로 전송
        //submit() - 자바스크립트 메서드
        document.join_form.submit();
    });
    
    
    
    //정보수정 버튼 클릭이벤트 - 아이디쪽 코드만 제
    $('#submitBtn02').click(function(){
        if(!$('#joinName').val()){
            alert("이름을 입력하세요");
            $('#joinName').focus(); //입력상자로 초점이 가라는 메서드
            return; //함수를 실행하는 도중에 호출하는 곳으로 보내면서 아래 코드가 전부 실행되지 않음
        }
        
        if(!$('#joinPw').val()){
            alert("비밀번호를 입력하세요");
            $('#joinPw').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#joinPwChk').val()){
            alert("비밀번호 확인을 입력하세요");
            $('#joinPwChk').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#postNum').val()){
            alert("우편번호를 입력하세요");
            $('#postNum').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#addr01').val()){
            alert("주소를 입력하세요");
            $('#addr01').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#addr02').val()){
            alert("나머지 주소를 입력하세요");
            $('#addr02').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#phone02').val()){
            alert("휴대폰 두번째 번호를 입력하세요");
            $('#phone02').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#phone03').val()){
            alert("휴대폰 세번째 번호를 입력하세요");
            $('#phone03').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        if(!$('#email01').val()){
            alert("이메일을 입력하세요");
            $('#email01').focus(); //입력상자로 초점이 가라는 메서드
            return;
        }
        
        //비밀번호와 비밀번호이 맞지 않아도 경고창
        if($('#joinPw').val() != $('#joinPwChk').val()){
            alert('비밀번호가 일치하지 않습니다. \n다시입력하세요');
            $('#joinPw').focus();
            return;
        }
        
        //위의 조건이 다 해결되면 데이터를 insert.php로 전송
        //submit() - 자바스크립트 메서드
        document.join_form.submit();
    });
    
    
    
});//준비구문 종료


//아이디 중복확인
$(document).ready(function(){
    $('#checkId').click(function(e){
        e.preventDefault(); //혹시 버튼이 데이터 전송할까봐 막음
        
        var idValue = $('#joinId').val(); //아이디입력상자의 value값을 담는 변수
        
        //새창을 가운데 오게 하기 위한 공식
        var w = $(window).width();
        var h = $(window).height();
        var leftValue = (w / 2) - 150; //새창사이즈의 반을 뺌
        var topValue = (h / 2) - 150;
        
        window.open('../tnav/check_id.php?id=' + idValue,'idCheck','width=300, height=300, top=' + topValue + ',left=' + leftValue);
    });
});

























