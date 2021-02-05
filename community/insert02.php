<?
    include "../lib/session.php";
?>
<meta charset="utf-8">
<?
    //삽입될 데이터를 처리하는 PHP

    //로그인 여부
    if(!$userid){
        echo "
            <script>
                window.alert('로그인 후 이용해 주세요.');
                history.go(-1);
            </script>
        ";
        exit;
    }

    //DB연결
    include "../lib/dbconn.php";

    //현재 아이디와 같은 레코드를 조회
    $sql = "SELECT * FROM news WHERE id='$userid'";

    //해당아이디와 맞는 결과레코드(행) 가져오기
    $result = mysqli_query($connect, $sql);

    //해당 레코드를 연관배열로 변경
    $row = mysqli_fetch_assoc($result);

    //concert테이블에 담아줘야하는 member테이블의 데이터를 담는 변수
    $name = $username;

    //폼데이터를 담는 변수
    $subject = $_POST['subject'];
    $content = $_POST['content'];
    $html_ok = $_POST['html_ok'];

    //작성일 - now
    $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

    //조회수
    $hit = 0; //처음에는 조회수가 없으므로 0

    //파일업로드 - 2개 => 저장되는 것도 2개
    $files = $_FILES["upfile"]; //업로드된 파일담는 변수
	$count = count($files["name"]); //파일개수 확인
    
    //업로드될 파일을 따로 저장할 경로
    $upload_dir = './data/';

    //반복문으로 파일업로드 및 저장경로로 이동
    for($i=0;$i<$count;$i++){
        //업로드 파일의 정보를 처리
        $upfile_name[$i]     = $files["name"][$i];
		$upfile_tmp_name[$i] = $files["tmp_name"][$i];
		$upfile_type[$i]     = $files["type"][$i];
		$upfile_size[$i]     = $files["size"][$i];
		$upfile_error[$i]    = $files["error"][$i];
        
        //각각 파일로 변수로 담기
        $file = explode(".", $upfile_name[$i]);
		$file_name = $file[0];
		$file_ext  = $file[1];
        
        //파일의 에러가 없다면 파일이동처리
        if(!$upfile_error[$i]){
            //새로운 파일 정보
            $new_file_name = date("Y_m_d_H_i_s");
			$new_file_name = $new_file_name."_".$i;
			$copied_file_name[$i] = $new_file_name.".".$file_ext;      
			$uploaded_file[$i] = $upload_dir.$copied_file_name[$i];
            
            //에러가 있다면 경고창과 나가기
            //용량설정1 - 500kb
            if($upfile_size[$i] > 500000){
                echo "
                    <script>
                        alert('업로드 파일 크기가 지정된 용량(500KB)을 초과합니다!<br>파일 크기를 체크해주세요! ');
                        history.go(-1);
                    </script>
                ";
                exit;
            }
            
            //파일 확장자를 이미지로만 처리 - gif, jpg, png
            if ( ($upfile_type[$i] != "image/gif") &&
				($upfile_type[$i] != "image/jpeg") &&
				($upfile_type[$i] != "image/png") )
			{
                echo "
                    <script>
						alert('JPG와 GIF와 PNG 이미지 파일만 업로드 가능합니다!');
						history.go(-1);
					</script>
                ";
                exit;
            }
            
            //파일 복사를 실패
            if (!move_uploaded_file($upfile_tmp_name[$i], $uploaded_file[$i])){
                echo "
                    <script>
                        alert('파일을 지정한 디렉토리에 복사하는데 실패했습니다.');
                        history.go(-1);
					</script>
                ";
                exit;
            }
            
            
        }
    }


    //수정모드인 경우와 처음글쓰기인 모드를 다르게 처리
    $mode = $_GET['mode'];
    $table = $_GET['table'];
    $num = $_GET['num'];

    if($mode == "modify"){ //수정모드이면
        //이미지를 삭제하는지 확인?
        $num_checked = count($_POST['del_file']);
		$position = $_POST['del_file'];

		for($i=0; $i<$num_checked; $i++){ // delete checked item
			$index = $position[$i];
			$del_ok[$index] = "y";
		}
        
        //데이터 조회
        $sql = "SELECT * FROM $table WHERE num=$num";   // get target record
		$result = mysqli_query($connect, $sql);
		$row = mysqli_fetch_assoc($result);
        
        for($i=0; $i<$count; $i++){ //업데이트할 DB데이터 (입력상자에 담긴 데이터)
            $field_org_name = "file_name_".$i;
			$field_real_name = "file_copied_".$i;

			$org_name_value = $upfile_name[$i];
			$org_real_value = $copied_file_name[$i];
            
            if($del_ok[$i] == "y"){ //삭제하기로 체크했다면
                $delete_field = "file_copied_".$i;
				$delete_name = $row[$delete_field];
				
				$delete_path = "./data/".$delete_name;

				unlink($delete_path);
                
                //수정모드 : SQL명령문 - update명령문
                $sql = "update $table set $field_org_name = '$org_name_value', $field_real_name = '$org_real_value'  where num=$num";
				mysqli_query($connect, $sql);  // $sql 에 저장된 명령 실행
            }else{ //파일삭제가 없을때
                if (!$upfile_error[$i]){
					$sql = "update $table set $field_org_name = '$org_name_value', $field_real_name = '$org_real_value'  where num=$num";
					mysqli_query($connect, $sql);  // $sql 에 저장된 명령 실행					
				}

            }
            
        }
        
        //제목과 내용을 업데이트
        $sql = "update $table set subject='$subject', content='$content' where num=$num";
		mysqli_query($connect, $sql);  // $sql 에 저장된 명령 실행
        
    }else{ //처음글쓰기모드이면
        //html태그를 입력상자에 작성할 것인지, 안쓸것이지 체크
        if($html_ok == 'y'){ //html쓰기를 하겠다.
            $is_html = "y";
        }else{ //html쓰기를 하지 않음
            $is_html = "";
            $contest = htmlspecialchars($content);
        }

        //데이터가 모든 변수에 값으로 담겨짐 - SQL명령으로 insert구문으로 데이터 추가
        $table = $_GET['table']; //주소표시줄의 테이블명 가져오기

        //INSERT INTO 테이블명(컬럼명) VALUES('값');
        $sql = "INSERT INTO $table(id, name, subject, content, regist_day, hit, is_html, file_name_0, file_name_1, file_copied_0,  file_copied_1) ";
        $sql .= "VALUES('$userid', '$name', '$subject', '$content', '$regist_day', '$hit', '$is_html', '$upfile_name[0]', '$upfile_name[1]', '$copied_file_name[0]', '$copied_file_name[1]')";
    }
    

    //SQL명령 실행
    mysqli_query($connect, $sql);


    //DB종료
    mysqli_close($connect);

    //데이터 추가가 완료되면 목록페이지로 이동
    echo "
	    <script>
            location.href = 'news.php?table=$table&page=1';
	    </script>
	";
?>













