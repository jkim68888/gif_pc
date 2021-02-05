<? include "../lib/session.php" ?>
<meta charset="utf-8">
<?
    //회원가입수정 폼 데이터를 담는 변수
    $name = $_POST["name"];
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

    //DB연결
    include "../lib/dbconn.php";

    //데이터 수정 SQL문 : UPDATE 테이블 SET 필드명='값', 필드명='값', ...;
    $sql = "UPDATE member SET name='$name', pass='$pass', birth='$birth', address='$addr', phone='$phone', phonechk='$smsreception', email='$email', emailchk='$emailreception' WHERE id='$userid'";

    //명령실행
    mysqli_query($connect, $sql);

    //세션변수 변경
    $_SESSION['username'] = $name;

    //DB종료
    mysqli_close($connect);

    //수정완료되면 첫페이지 이동
    echo "
	   <script>
	    location.href = '../index.php';
	   </script>
	";
?>











