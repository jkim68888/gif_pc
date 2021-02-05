<?
    //왜 session.php를 include시키지 않았냐면 이 페이지에서 세션변수값을 생성
    //session.php의 변수값을 잘못해서 가져오면 안되기때문
    session_start();
?>
<meta charset="utf-8">
<?
    //로그인 폼에서 데이터받기
    $id = $_POST["id"];
    $pass = $_POST["pass"];

    //로그인페이지에서 아이디를 입력하지 않았다면
    if(!$id){
        echo "
            <script>
                window.alert('아이디를 입력하세요.');
                history.go(-1);
            </script>
        ";
    }

    //로그인페이지에서 비밀번호를 입력하지 않았다면
    if(!$pass){
        echo "
            <script>
                window.alert('비밀번호를 입력하세요.');
                history.go(-1);
            </script>
        ";
    }

    //아이디와 비밀번호가 DB와 맞는지 체크
    
    //DB연결
    include "../lib/dbconn.php";

    //데이터조회 - 아이디명 확인
    $sql = "SELECT * FROM member WHERE id='$id'";
    $result = mysqli_query($connect,$sql);

    //아이디와 맞는 행이 존재하는지 확인
    $num_match = mysqli_num_rows($result);


    //아이디 유무에 따른 명령
    if(!$num_match){ //아이디가 없다면
        echo "
            <script>
                window.alert('등록되지 않은 아이디입니다.');
                history.go(-1);
            </script>
        ";
    }else{ //아이디가 존재한다면
        //비번이 맞는지를 조회하기 위해서 데이터를 연관배열로 가져옴
        $row = mysqli_fetch_assoc($result);
        
        $db_pass = $row['pass']; //DB에 존재하는 비번을 담는 변수
        
        if($pass != $db_pass){ //로그인폼의 비번과 DB의 비번이 맞지 않다면
            echo "
                <script>
                    window.alert('비밀번호가 틀립니다.');
                    history.go(-1);
                </script>
            ";
        }else{ //비번이 서로 맞는다면
            //DB의 값을 세션에 담아주기 위해 변수에 먼저 담음
            $userid = $row['id']; //상단메뉴에 첨부
            $username = $row['name']; //상단메뉴에 첨부
            $userlevel = $row['level']; //게시판글작성 권한
            
            //세션변수에 위의 값을 등록 : 사용자 컴퓨터 및 서버컴퓨터가 해당 내용을 세션을 파괴하기 전까지 계속 기억
            $_SESSION['userid'] = $userid;
            $_SESSION['username'] = $username;
            $_SESSION['userlevel'] = $userlevel;
            
            
            //로그인이 완료되면 첫화면 돌아감
            echo "
                <script>
                    location.href = '../index.php';
                </script>
            ";
        }
    }

?>














