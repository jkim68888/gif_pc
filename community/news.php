<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <title>언론 - G.I.F</title>
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
    </head>
    <body>
        <header>
            <div class="hTop">
                <div class="tNav">
                    <ul>
                        <li><a href="../tnav/login.php">로그인</a></li>
                        <li><a href="../tnav/join.php">회원가입</a></li>
                        <li class="last"><a href="../tnav/nonMember.php">비회원 예매확인</a></li>
                    </ul>
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
					<li class="first out"><a href="notice.php">공지사항</a></li>
					<li class="middle out"><a href="event.php">이벤트</a></li>
					<li class="last active"><a href="news.php">언론</a></li>
				</ul>
            </nav>
            <div id="subContents">
                <div class="noticeTable">
                    <div class="page">
                        <span class="total">
                            전체
                            <b>100건</b>
                        </span>
                        <span class="current">
                            페이지
                            <strong>1</strong>/<b>10</b>
                        </span>
                    </div>
                    <form name="board_form" id="boardForm" method="post" action="">
                        <select name="find" id="findSelect">
                            <option value="subject">제목</option>
                            <option value="content">내용</option>
                            <option value="name">이름</option>
                        </select>
                        <label for="findSelect" class="away">검색 기준 선택</label>
                        <input type="text" name="search" id="searchBox">
                        <label for="searchBox" class="away">검색 상자</label>
                        <button type="button" name="search_btn" id="searchBtn">검색</button>
                    </form>
                    <table>
                        <caption>공지사항 목록 테이블</caption>
                        <tr>
                            <th>번호</th>
                            <th>제목</th>
                            <th>글쓴이</th>
                            <th>날짜</th>
                            <th class="last">조회</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="#">[문화가 있는 날] "계절을 그리는 미술관" 사전예약</a></td>
                            <td>이연미술관</td>
                            <td>2020-02-20</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="#">[문화가 있는 날] "계절을 그리는 미술관" 사전예약</a></td>
                            <td>이연미술관</td>
                            <td>2020-02-20</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="#">[문화가 있는 날] "계절을 그리는 미술관" 사전예약</a></td>
                            <td>이연미술관</td>
                            <td>2020-02-20</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="#">[문화가 있는 날] "계절을 그리는 미술관" 사전예약</a></td>
                            <td>이연미술관</td>
                            <td>2020-02-20</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="#">[문화가 있는 날] "계절을 그리는 미술관" 사전예약</a></td>
                            <td>이연미술관</td>
                            <td>2020-02-20</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="#">[문화가 있는 날] "계절을 그리는 미술관" 사전예약</a></td>
                            <td>이연미술관</td>
                            <td>2020-02-20</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="#">[문화가 있는 날] "계절을 그리는 미술관" 사전예약</a></td>
                            <td>이연미술관</td>
                            <td>2020-02-20</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="#">[문화가 있는 날] "계절을 그리는 미술관" 사전예약</a></td>
                            <td>이연미술관</td>
                            <td>2020-02-20</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="#">[문화가 있는 날] "계절을 그리는 미술관" 사전예약</a></td>
                            <td>이연미술관</td>
                            <td>2020-02-20</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="#">[문화가 있는 날] "계절을 그리는 미술관" 사전예약</a></td>
                            <td>이연미술관</td>
                            <td>2020-02-20</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="#">[문화가 있는 날] "계절을 그리는 미술관" 사전예약</a></td>
                            <td>이연미술관</td>
                            <td>2020-02-20</td>
                            <td>3</td>
                        </tr>
                    </table>
                    <div class="pageBtn">
                        <div class="pageNum">
                            <a href="#" class="prevPage">&lt;&lt; 이전</a>
                            <b>1</b>
                            <a href="#" class="numList">2</a>
                            <a href="#" class="numList">3</a>
                            <a href="#" class="numList">4</a>
                            <a href="#" class="numList">5</a>
                            <a href="#" class="nextPage">다음 &gt;&gt;</a>
                        </div>
                        <div class="btnWrap">
                            <a href="news.php" class="listBtn">목록</a>
                            <a href="news_write.php" class="writeBtn">글쓰기</a>
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







