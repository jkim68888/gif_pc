<meta charset="utf-8">
<?
    //회원가입 폼데이터를 DB에 추가하는 페이지

    //폼데이터를 가져올 때는 $_POST["폼네임"]
    //주소표시줄 파라미터값을 가져올 때는 $_GET["속성명"]

    //회원가입 폼 데이터를 담는 변수
    $name = $_POST["name"];
    $id = $_POST["id"];
    $pass = $_POST["pass"];
    $post = $_POST["post"];

    //생년월일
    $birth01 = $_POST["birth01"];
    $birth02 = $_POST["birth02"];
    $birth03 = $_POST["birth03"];

    if($birth02 < 10){
        $birth02 = '0' . $birth02;
    }
    if($birth03 < 10){
        $birth03 = '0' . $birth03;
    }

    $birth = $birth01 . "-" . $birth02 . "-" . $birth03;

    //주소 조합
    $addr01 = $_POST["addr01"];
    $addr02 = $_POST["addr02"];
    $addr = $addr01 . '|' . $addr02;

    //휴대폰 조합
    $phone01 = $_POST["phone01"];
    $phone02 = $_POST["phone02"];
    $phone03 = $_POST["phone03"];
    $phone = $phone01 . "-" . $phone02 . "-" . $phone03;

    //이메일 조합
    $email01 = $_POST["email01"];
    $email02 = $_POST["email02"];
    $email03 = $_POST["email03"];

    if(!$email02){ //직접입력값이 없다면
        $email = $email01 . "@" . $email03;
    }else{ //직접입력값이 있다면
        $email = $email01 . "@" . $email02;
    }

    $smsreception = $_POST["smsreception"];
    $emailreception = $_POST["emailreception"];

    $regist_day = date("Y-m-d (H:i)"); //가입일 오늘날짜시간
    $ip = $REMOTE_ADDR; //방문자 IP주소 확인

    //DB연결
    include "../lib/dbconn.php";

    //데이터 조회를 해서 해당아이디가 있는지 확인
    $sql = "SELECT * FROM member WHERE id='$id'";
    $result = mysqli_query($connect,$sql);
    $exist_id = mysqli_num_rows($result);

    if($exist_id){ //해당아이디가 서버에 미리 존재한다면
        echo("
            <script>
                window.alert('해당 아이디가 존재합니다.')
                history.go(-1)
            </script>
        ");
        exit; 
    }else{ //해당아이디가 없다면 - 데이터를 DB 추가
        //SQL명령문 : INSERT
        $sql = "INSERT INTO member(name, id, pass, birth, post, address, phone, phonechk, email, emailchk, regist_day, level) ";
        $sql .= "VALUES('$name','$id', '$pass', '$birth', '$post', '$addr', '$phone', '$smsreception', '$email', '$emailreception', '$regist_day', 9)";
        
        mysqli_query($connect, $sql);  // $sql 에 저장된 명령 실행

    }


    //DB연결끊기
    mysqli_close($connect);

    //회원가입이 다되면 회원가입 완료 페이지로 보냄
    echo "
        <script>
        location.href = 'join_complete.php#subTitle';
        </script>
    ";


?>






