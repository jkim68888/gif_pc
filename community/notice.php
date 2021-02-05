<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <title>공지사항 - G.I.F</title>
        <link rel="shortcut icon" href="../images/common/favicon_16x16.png">
        <link rel="icon" sizes="192x192" href="../images/common/favicon_android_192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/common/favicon_ios_180x180.png">
        <link rel="stylesheet" href="../css/colorbox.css">
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
        <link rel="stylesheet" href="../css/notice.css">
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/jquery.colorbox-min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/common.js"></script>
        <script src="../js/sub.js"></script>
        <script src="write.js"></script>
    </head>
    <body>
        <?
            //DB를 연결하고 데이터 조회 - SELECT
            
            //DB연결
            include "../lib/dbconn.php";
        
            //연주회 소개 테이블담는 변수
            $table = 'notice';
        
            //한 화면에 표시될 리스트 글수를 담는 변수
            $scale = 10; 
        
            //주소표시줄의 mode라는 파라미터값 받아오기
            $mode = $_GET['mode'];
        
            //검색폼의 데이터를 받아오는 변수
            $search = $_POST['search']; //검색입력상자의 값을 담는 변수
            $find = $_POST['find']; //선택상자의 값을 담는 변수
        
        
            //데이터조회구문이 처음상태와 검색했을때와 다르게 처리
            if($mode == "search"){ //검색버튼을 눌렀다면
                if(!$search){ //입력상자에 값이 없으면
                    echo "
                        <script>
                            window.alert('검색할 단어를 입력해 주세요!');
                            history.go(-1);
                        </script>
                    ";
                    exit; //페이지 벗어나기
                }
                
                $sql = "SELECT * FROM $table WHERE $find LIKE '%$search%' ORDER BY num DESC";
            }else{ //페이지로 바로 왔을때
                $sql = "SELECT * FROM $table ORDER BY num DESC";
            }
            
        
            //명령실행 - mysqli_query()
            $result = mysqli_query($connect, $sql);
        
            //전체 글수를 담는 변수
            $total_record = mysqli_num_rows($result);
        
            //페이지네이션
            //글이 21개라고 가정하면 페이지 번호 3개
            //전체페이지수를 계산 : 전체글수/보여줄글수
            //floor(실수) : 내림처리해서 정수로 변경해주는 함수
            if($total_record % $scale == 0){ //나머지 글이 없을때
                //전체 페이지수를 담는 변수
                $total_page = floor($total_record / $scale);
            }else{ //나머지 글이 있다면 
                //무조건 한페이지씩 더 생겨야함
                $total_page = floor($total_record / $scale) + 1;
            }
        
            //페이지번호 - 처음접속하면 1을 배당, 해당페이지 번호 처리
            if(isset($_GET["page"])){ //페이지가 있으면 
                $page = $_GET["page"]; //그번호로 처리
            }else{
                $page = 1; //페이지가 없으면 1번으로 처리
            }
        
            //페이지 번호에 따라 보여줄 시작번호 구하기
            $start = ($page - 1) * $scale;
            $number = $total_record - $start;

        
        ?>
        <header>
            <div class="hTop">
                <div class="tNav">
                    <? include "../lib/top_nav.php"; ?>
                </div>
            </div>
            <div class="hBottom">
                <nav class="gnb">
                    <ul>
                        <li>
                            <a href="../movie/current.php" class="mainNav">영화</a>
                            <ul class="subNav">
                                <li><a href="../movie/current.php">현재상영작</a></li>
                                <li><a href="../movie/future.php">상영예정작</a></li>
                                <li><a href="../movie/exhibit.php">기획전</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../ticket/ticketing.php" class="mainNav">예매</a>
                            <ul class="subNav">
                                <li><a href="../ticket/ticketing.php">예매하기</a></li>
                                <li><a href="../ticket/schedule.php">상영시간표</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="notice.php" class="mainNav">커뮤니티</a>
                            <ul class="subNav">
                                <li><a href="notice.php">공지사항</a></li>
                                <li><a href="event.php">이벤트</a></li>
                                <li><a href="news.php">언론</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../customer/faq.php" class="mainNav">고객센터</a>
                            <ul class="subNav customer">
                                <li><a href="../customer/faq.php">Q&amp;A</a></li>
                                <li><a href="../customer/person.php">1:1문의</a></li>
                                <li><a href="../customer/lost.php">분실물신고</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../index.php">
                                <h1></h1>
                            </a>
                        </li>
                        <li>
                            <a href="../introduce/about.php" class="mainNav">영화관소개</a>
                            <ul class="subNav introduce">
                                <li><a href="../introduce/about.php">독립영화란?</a></li>
                                <li><a href="../introduce/map.php">오시는길</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../org/introduce.php" class="mainNav">광주영화영상인연대</a>
                            <ul class="subNav">
                                <li><a href="../org/introduce.php">단체소개</a></li>
                                <li><a href="../org/familysite.php">유관단체</a></li>
                                <li><a href="../org/identity.php">CI</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <div id="headerLine"></div>
        <div id="subBox">
            <div id="mainMenu">
                <h2>커뮤니티</h2>
            </div>
            <nav id="subMenu">
                <ul>
					<li class="first active"><a href="notice.php">공지사항</a></li>
					<li class="middle out"><a href="event.php">이벤트</a></li>
					<li class="last out"><a href="news.php">언론</a></li>
				</ul>
            </nav>
            <div id="subContents">
                <div class="noticeTable">
                    <!--페이지 처리-->
                    <div class="page">
                        <span class="total">
                            전체
                            <b><?=$total_record?>건</b>
                        </span>
                        <span class="current">
                            페이지
                            <strong><?=$page?></strong>/<b><?= $total_page ?></b>
                        </span>
                    </div>
                    <!--검색 폼-->
                    <form name="board_form" id="boardForm" method="post" action="notice.php?table=<?=$table?>&mode=search">
                        <select name="find" id="findSelect">
                            <option value="subject">제목</option>
                            <option value="content">내용</option>
                            <option value="name">이름</option>
                        </select>
                        <label for="findSelect" class="away">검색 기준 선택</label>
                        <input type="text" name="search" id="searchBox">
                        <label for="searchBox" class="away">검색 상자</label>
                        <button type="submit" name="search_btn" id="searchBtn">검색</button>
                    </form>
                    <table>
                        <caption>공지사항 목록 테이블</caption>
                        <!--행제목-->
                        <tr>
                            <th>번호</th>
                            <th>제목</th>
                            <th>글쓴이</th>
                            <th>날짜</th>
                            <th class="last">조회</th>
                        </tr>
                        <?
                            if($total_record == 0){
                                echo "<tr><td colspan='5'>게시글이 없습니다.</td></tr>";
                            }

                            //있는 글만큼 반복해서 가져오기
                            for($i=$start; $i<$start+$scale && $i < $total_record; $i++){
                                //가져올 레코드 선택
                                mysqli_data_seek($result, $i);

                                //갖고 온 한행을 연관배열로 가져오기
                                $row = mysqli_fetch_assoc($result);


                                //연관배열에서 데이터를 각각 가져오기
                                $item_num = $row['num'];
                                $item_id = $row['id'];
                                $item_name = $row['name'];
                                $item_hit = $row['hit'];
                                $item_date = $row['regist_day'];
                                $item_date = substr($item_date, 0, 10); //년,월,일만 반환 - 그게 열글자

                                //제목 - 제목 문자열에 띄어쓰기 있다면,특수문자로 변경해라
                                $item_subject = str_replace(" ", "&nbsp;", $row['subject']);
                        ?>

                        <!--조회한 데이터를 담을 태그-->
                        <tr>
                            <td><?= $number ?></td>
                            <!--내용을 클릭시 해당 글을 보여주는 view.php로 이동-->
                            <td class="title"><a href="notice_view.php?table=<?=$table?>&num=<?=$item_num?>&page=<?=$page?>"><?= $item_subject ?></a></td>
                            <td><?= $item_name ?></td>
                            <td><?= $item_date ?></td>
                            <td><?= $item_hit ?></td>
                        </tr>
                        <!--번호를 숫자를 감소-->
                        <?
                            $number--; //조회번호를 감소
                            } //반복문의 종료
                        ?>
                    </table>
                    <div class="pageBtn">
                        <div class="pageNum">
                            <?php
                                if ($total_page>=2 && $page >= 2){
                                    $new_page = $page-1;
                                    echo "<a href='notice.php?table=$table&page=$new_page' class='prevPage'>&lt;&lt; 이전</a>";
                                }else{
                                    echo "&nbsp;";
                                }
                            ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;

                               <?php
                                //게시판 페이지번호 반복
                                for($i=1; $i<=$total_page; $i++){
                                    if($page == $i){ //현재페이지는 링크안검
                                        echo "<b> $i </b>";
                                    }else{ //나머지페이지는 링크처리
                                        echo "<a href='notice.php?table=$table&page=$i'> $i </a>";
                                    }
                                }
                            ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <?php
                                if ($total_page>=2 && $page != $total_page){
                                    $new_page = $page+1;
                                    echo "<a href='notice.php?table=$table&page=$new_page' class='nextPage'>다음 &gt;&gt;</a>";
                                }else{
                                    echo "&nbsp;";
                                }
                            ?>
                        </div>
                        <div class="btnWrap">
                            <a href="notice.php" class="listBtn">목록</a>
                            <? 
                                //로그인되어 있어야 글쓰기 버튼 처리
                                if($userid){
                            ?>
                                    <a href="notice_write.php?table=<?=$table?>" class="writeBtn">글쓰기</a>
                            <?
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="wrap">
                <h1>
                    <img src="../images/common/footer_logo.png" alt="G.I.F 로고">
                </h1>
                <div class="fTop">
                    <div class="fNav">
                        <ul>
                            <li><a href="#">이용약관</a></li>
                            <li><a href="#">개인정보처리방침</a></li>
                            <li><a href="#">이메일무단수집거부</a></li>
                            <li><a href="#">윤리경영</a></li>
                        </ul>
                    </div>
                    <div class="sns">
                        <ul>
                            <li>
                                <a href="http://twitter.com" target="_blank">
                                    <img src="../images/common/footer_sns_twitter_icon.png" alt="트위터 아이콘">
                                </a>
                            </li>
                            <li>
                                <a href="http://facebook.com" target="_blank">
                                    <img src="../images/common/footer_sns_facebook_icon.png" alt="페이스북 아이콘">
                                </a>
                            </li>
                            <li>
                                <a href="http://instagram.com" target="_blank">
                                    <img src="../images/common/footer_sns_insta_icon.png" alt="인스타그램 아이콘">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="fBottom">
                    <p>
                        서울특별시 마포구 월드컵로 240, 지상2층(성산동, 월드컵주경기장) ARS 1544-0070<br>
                        대표자명 홍길동 · 개인정보보호책임자 김지현 · 사업자등록번호 211-86-59478 · 통신판매업신고번호 제 833호<br>
                        COPYRIGHT &copy; GwangjuIndipendentFilm, Inc. All rights reserved
                    </p>
                </div>
            </div>
        </footer>
        <aside class="scrollTop">
            <a href="#"></a>
        </aside>
    </body>
</html>








