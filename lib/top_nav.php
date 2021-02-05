<?
    //아직 로그인을 하지 않았다면
    if(!$userid){
        ?>
        <ul>
            <li><a href="/tnav/login.php">로그인</a></li>
            <li><a href="/tnav/join.php">회원가입</a></li>
            <li class="last"><a href="/tnav/nonMember.php">비회원 예매확인</a></li>
        </ul>
        <?
    }else{ //로그인을 했다면
        ?>
        <ul>
            <li><?=$username?>(<?=$userid?>)님 안녕하세요!</li>
            <!--로그아웃클릭하면 log_out.php로 가서 로그아웃이 처리-->
            <li><a href="/tnav/log_out.php">로그아웃</a></li>
            <li><a href="/tnav/join_form_modify.php">회원정보 수정</a></li>
        </ul>
        <?
    }
?>
                       

                       