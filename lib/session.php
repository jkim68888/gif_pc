<?
    //session(세션) : 사용자와 컴퓨터와 서버 컴퓨터가 정보를 담고 있는 텍스트파일
    //사용자가 로그인했는지를 파악하기 위해서 세션 시작
    session_start();

    //세션 변수 값을 사용
    //상단메뉴에 로그인이 되었으면 로그인/아니면 로그아웃 식으로 처리
    
    //세션변수에 아이디값이 있는지 확인
    //isset() : 값이 있으면 true
    if(isset($_SESSION['userid'])){  //로그인이 되었다면       
        $userid = $_SESSION['userid'];
    }else{ //로그인이 되지 않았다면
        $userid = ""; 
    }

    //세션변수에 네임값이 있는지 확인
    if(isset($_SESSION['username'])){ //isset() - 매개변수 값이 있으면 true
        $username = $_SESSION['username'];
    }else{ //아이디가 없다면
        $username = ""; 
    }

    //세션변수에 레벨값이 있는지 확인
    if(isset($_SESSION['userlevel'])){ //isset() - 매개변수 값이 있으면 true
        $userlevel = $_SESSION['userlevel'];
    }else{ //아이디가 없다면
        $userlevel = ""; 
    }


    //로그인 한지 30분이 지났다면 세션제거
    if(!isset($_SESSION['LAST_ACTIVITY'])) {
        // initiate value
        $_SESSION['LAST_ACTIVITY'] = time();
    }
    if(time() - $_SESSION['LAST_ACTIVITY'] > 1800) { //시간에 변경하고 싶으면 초단위로 계산해서 숫자 변경
        // last activity is more than 10 minutes ago
        session_destroy();
    }else{
        // update last activity timestamp
        $_SESSION['LAST_ACTIVITY'] = time();
    }


    
?>