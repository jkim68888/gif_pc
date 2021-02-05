<?
    include "../lib/session.php";
    include "../lib/dbconn.php"; //DB연결

    //주소표시줄의 파라미터를 담는 변수
    $num = $_GET['num']; //글번호
    $table = $_GET['table'];

    //글번호가 같은 레코드를 DB에서 조회
    $sql = "SELECT * FROM $table WHERE num = $num";

    $result = mysqli_query($connect, $sql); //SQL명령 실행

    $row = mysqli_fetch_assoc($result); //레코드의 데이터를 연관배열로 가져옴

    //이미지를 변수에 담기 - data폴더에 있는 이미지 삭제하기 위함
    $copied_name[0] = $row['file_copied_0'];
    $copied_name[1] = $row['file_copied_1'];

    //반복문을 통해서 삭제
    for ($i=0; $i<2; $i++){
		if ($copied_name[$i]){
			$image_name = "./data/".$copied_name[$i];
			unlink($image_name);
	    }
    }

    //DB삭제 - SQL : delete
    //DELETE FROM 테이블명 WHERE 조건식;
    $sql = "DELETE FROM $table WHERE num = $num";
    mysqli_query($connect, $sql);

    mysqli_close($connect); //데이터 연결 끊기

    //삭제가 완료되면 목록페이지로 이동
    echo "
        <script>
            location.href = 'news.php?table=$table';
        </script>
	"; 


?>