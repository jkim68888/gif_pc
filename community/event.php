<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <title>이벤트 - G.I.F</title>
        <link rel="shortcut icon" href="../images/common/favicon_16x16.png">
        <link rel="icon" sizes="192x192" href="../images/common/favicon_android_192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/common/favicon_ios_180x180.png">
        <link rel="stylesheet" href="../css/colorbox.css">
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
        <link rel="stylesheet" href="../css/event.css">
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
					<li class="first out"><a href="notice.php">공지사항</a></li>
					<li class="middle active"><a href="event.php">이벤트</a></li>
					<li class="last out"><a href="news.php">언론</a></li>
				</ul>
            </nav>
            <div id="eventSub">
                <ul>
                    <li>
                        <a href="#null">
                            <div class="imgBg">
                                <img src="../images/community/event_bn01.jpg" alt="카카오뱅크 체크카드 할인이벤트">
                                <span class="gobtn">더보기</span>
                                <span class="tline"></span>
                                <span class="bline"></span>
                                <span class="lline"></span>
                                <span class="rline"></span>
                            </div>
                            <h3>카카오 체크카드 결제 혜택</h3>
                            <p>기간: 2020년 12월 20일 ~ 2021년 1월 20일</p>
                        </a>
                    </li>
                    <li>
                        <a href="#null">
                            <div class="imgBg">
                                <img src="../images/community/event_bn02.jpg" alt="재개봉 전용관 오픈 이벤트">
                                <span class="gobtn">더보기</span>
                                <span class="tline"></span>
                                <span class="bline"></span>
                                <span class="lline"></span>
                                <span class="rline"></span>
                            </div>
                            <h3>재개봉 전용관 오픈 기념 이벤트</h3>
                            <p>기간: ~ 2021년 2월 28일</p>
                        </a>
                    </li>
                    <li>
                        <a href="#null">
                            <div class="imgBg">
                                <img src="../images/community/event_bn03.jpg" alt="신년 소원 빌기 이벤트">
                                <span class="gobtn">더보기</span>
                                <span class="tline"></span>
                                <span class="bline"></span>
                                <span class="lline"></span>
                                <span class="rline"></span>
                            </div>
                            <h3>신년 이벤트</h3>
                            <p>기간: 2020년 12월 30일 ~ 2021년 1월 2일</p>
                        </a>
                    </li>
                    <li>
                        <a href="#null">
                            <div class="imgBg">
                                <img src="../images/community/event_bn04.jpg" alt="연인과 함께라면 팝콘이 원 플러스 원 이벤트">
                                <span class="gobtn">더보기</span>
                                <span class="tline"></span>
                                <span class="bline"></span>
                                <span class="lline"></span>
                                <span class="rline"></span>
                            </div>
                            <h3>커플 이벤트</h3>
                            <p>기간: 2020년 12월 18일 ~ 2021년 1월 15일</p>
                        </a>
                    </li>
                    <li>
                        <a href="#null">
                            <div class="imgBg">
                                <img src="../images/community/event_bn05.jpg" alt="내맘대로 생 맥주통 이벤트">
                                <span class="gobtn">더보기</span>
                                <span class="tline"></span>
                                <span class="bline"></span>
                                <span class="lline"></span>
                                <span class="rline"></span>
                            </div>
                            <h3>생맥주 이벤트</h3>
                            <p>기간: 2020년 12월 31일 ~ 2021년 2월 22일</p>
                        </a>
                    </li>
                    <li>
                        <a href="#null">
                            <div class="imgBg">
                                <img src="../images/community/event_bn06.jpg" alt="친환경 영화관람 이벤트">
                                <span class="gobtn">더보기</span>
                                <span class="tline"></span>
                                <span class="bline"></span>
                                <span class="lline"></span>
                                <span class="rline"></span>
                            </div>
                            <h3>친환경 영화관람 관련 이벤트</h3>
                            <p>기간: 2020년 12월 10일 ~ 2021년 1월 10일</p>
                        </a>
                    </li>
                    <li>
                        <a href="#null">
                            <div class="imgBg">
                                <img src="../images/community/event_bn07.jpg" alt="통큰 팝콘 할인 이벤트">
                                <span class="gobtn">더보기</span>
                                <span class="tline"></span>
                                <span class="bline"></span>
                                <span class="lline"></span>
                                <span class="rline"></span>
                            </div>
                            <h3>통큰 팝콘 할인</h3>
                            <p>기간: 2020년 12월 20일 ~ 2021년 1월 20일</p>
                        </a>
                    </li>
                </ul>
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








