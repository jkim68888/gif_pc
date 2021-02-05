<? include "./lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <title>Gwangju Independent Film</title>
        <link rel="shortcut icon" href="images/common/favicon_16x16.png">
        <link rel="icon" sizes="192x192" href="images/common/favicon_android_192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images/common/favicon_ios_180x180.png">
        <link rel="stylesheet" href="css/swiper.min.css">
        <link rel="stylesheet" href="css/colorbox.css">
        <link rel="stylesheet" href="css/common.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.colorbox-min.js"></script>
        <script src="js/swiper.min.js"></script>
        <script src="js/common.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>
        <div id="popup">
            <div class="pTop">
                <div class="notice">
                    <h2>NOTICE</h2>
                    <p>
                        본 사이트는 상업적 목적이 아닌 <span>개인 포트폴리오</span> 용도로 만들어 졌습니다.<br>
                        홈페이지의 일부 내용과 이미지 등은, 그 <span>출처가 따로 있음</span>을 밝힙니다.
                    </p>
                </div>
                <div class="mobile">
                    <h2>MOBILE</h2>
                    <p>
                        왼쪽 QR코드를 스캔해주세요.<br>
                        모바일 페이지로 이동합니다.
                    </p>
                    <img src="images/main/popup_qr.jpg" alt="큐알코드">
                </div>
            </div>
            <div class="pBottom">
                <form action="#">
                    <fieldset>
                        <legend>오늘 하루 보이지 않기</legend>
                        <input type="checkbox" id="chk">
                        <label for="chk">오늘 하루 보이지 않기</label>
                        <a href="#close" title="팝업창 닫기">X</a>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="mainWrap">
            <header>
                <div class="hTop">
                    <div class="tNav">
                        <? include "./lib/top_nav.php"; ?>
                    </div>
                </div>
                <div class="hBottom">
                    <nav class="gnb">
                        <ul>
                            <li>
                                <a href="movie/current.php" class="mainNav">영화</a>
                                <ul class="subNav">
                                    <li><a href="movie/current.php">현재상영작</a></li>
                                    <li><a href="movie/future.php">상영예정작</a></li>
                                    <li><a href="movie/exhibit.php">기획전</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="ticket/ticketing.php" class="mainNav">예매</a>
                                <ul class="subNav">
                                    <li><a href="ticket/ticketing.php">예매하기</a></li>
                                    <li><a href="ticket/schedule.php">상영시간표</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="community/notice.php" class="mainNav">커뮤니티</a>
                                <ul class="subNav">
                                    <li><a href="community/notice.php">공지사항</a></li>
                                    <li><a href="community/event.php">이벤트</a></li>
                                    <li><a href="community/news.php">언론</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="customer/faq.php" class="mainNav">고객센터</a>
                                <ul class="subNav customer">
                                    <li><a href="customer/faq.php">Q&amp;A</a></li>
                                    <li><a href="customer/person.php">1:1문의</a></li>
                                    <li><a href="customer/lost.php">분실물신고</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="index.php">
                                    <h1></h1>
                                </a>
                            </li>
                            <li>
                                <a href="introduce/about.php" class="mainNav">영화관소개</a>
                                <ul class="subNav introduce">
                                    <li><a href="introduce/about.php">독립영화란?</a></li>
                                    <li><a href="introduce/map.php">오시는길</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="org/introduce.php" class="mainNav">광주영화영상인연대</a>
                                <ul class="subNav">
                                    <li><a href="org/introduce.php">단체소개</a></li>
                                    <li><a href="org/familysite.php">유관단체</a></li>
                                    <li><a href="org/identity.php">CI</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>
            <div id="mSlider">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide01">
                            <div class="posterWrap">
                                <img src="images/main/mSlider_poster_01.jpg" alt="겨울밤에 영화 포스터">
                                <button type="button" onclick="location.href='ticket/ticketing.php'">바로예매</button>
                                <p>
                                    “ 뭘 찾으세요? ”<br>
                                    30년 만에 춘천을 찾은 남녀,<br>
                                    무언가 잃어버린 이들의 잊지 못할 한겨울밤의 꿈 같은 영화  
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide slide02">
                            <div class="posterWrap">
                                <img src="images/main/mSlider_poster_02.jpg" alt="에듀케이션 영화 포스터">
                                <button type="button" onclick="location.href='ticket/ticketing.php'">바로예매</button>
                                <p>
                                    ‘성희’는 중증 장애인의 집을<br>
                                    새롭게 배정받는다. 기대했던 것과 달리,<br>
                                    고등학생 ‘현목(김준형)은 사사건건 ‘성희’를 성가시게 하는데...
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide slide03">
                            <div class="posterWrap">
                                <img src="images/main/mSlider_poster_03.jpg" alt="잔칫날 영화 포스터">
                                <button type="button" onclick="location.href='ticket/ticketing.php'">바로예매</button>
                                <p>
                                    동생 몰래 장례식 비용을 마련하기 위해<br>
                                    행사를 간 경만은 남편을 잃은 후 웃음도 잃은<br>
                                    팔순의 어머니를 웃게 해달라는 요구를 받는데...
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide slide04">
                            <div class="posterWrap">
                                <img src="images/main/mSlider_poster_04.jpg" alt="내언니전지현과 나 영화 포스터">
                                <button type="button" onclick="location.href='ticket/ticketing.php'">바로예매</button>
                                <p>
                                    과거 국내 최대 이용자 수를 자랑했던  게임 '일랜시아'<br>
                                    현재는 운영진에 버림받은 대한민국 대표 망겜!<br>
                                    “일랜시아 왜 하세요?” 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="playBtn">
                        <a href="#"></a>
                    </div>
                    <div class="pauseBtn">
                        <a href="#"></a>
                    </div>
                    <div class="scrollDown">
                        <img src="images/main/mSlider_mouse_icon.png" alt="마우스 스크롤다운 아이콘">
                    </div>
                </div>
            </div>
        </div>
        <div id="ranking">
            <div class="wrap">
                <h2>영화순위</h2>
                <ul>
                    <li class="education">
                        <div class="poster">
                            <img src="images/main/ranking_poster_01.png" alt="영화 에듀케이션 포스터">
                            <h3>1</h3>
                        </div>
                        <h4>에듀케이션</h4>
                        <button type="button" class="viewMore" onclick="location.href='movie/current.php'">자세히보기</button>
                        <button type="button" class="ticketing" onclick="location.href='ticket/ticketing.php'">예매하기</button>
                    </li>
                    <li class="festival">
                        <div class="poster">
                            <img src="images/main/ranking_poster_02.png" alt="영화 잔칫날 포스터">
                            <h3>2</h3>
                        </div>
                        <h4>잔칫날</h4>
                        <button type="button" class="viewMore" onclick="location.href='movie/current.php'">자세히보기</button>
                        <button type="button" class="ticketing" onclick="location.href='ticket/ticketing.php'">예매하기</button>
                    </li>
                    <li class="sister">
                        <div class="poster">
                            <img src="images/main/ranking_poster_03.png" alt="영화 내언니전지현과 나 포스터">
                            <h3>3</h3>
                        </div>
                        <h4>내언니전지현과나</h4>
                        <button type="button" class="viewMore" onclick="location.href='movie/current.php'">자세히보기</button>
                        <button type="button" class="ticketing" onclick="location.href='ticket/ticketing.php'">예매하기</button>
                    </li>
                    <li class="winter">
                        <div class="poster">
                            <img src="images/main/ranking_poster_04.png" alt="영화 겨울밤에 포스터">
                            <h3>4</h3>
                        </div>
                        <h4>겨울밤에</h4>
                        <button type="button" class="viewMore" onclick="location.href='movie/current.php'">자세히보기</button>
                        <button type="button" class="ticketing" onclick="location.href='ticket/ticketing.php'">예매하기</button>
                    </li>
                </ul>
            </div>
        </div>
        <div id="guide">
            <ul>
                <li class="ticketing">
                    <a href="ticket/ticketing.php">예매안내</a>
                </li>
                <li class="schedule">
                    <a href="ticket/schedule.php">영화시간표</a>
                </li>
                <li class="confirm">
                    <a>예매확인</a>
                </li>
                <li class="discount">
                    <a href="community/event.php">할인안내</a>
                </li>
                <li class="map">
                    <a href="introduce/map.php">오시는길</a>
                </li>
            </ul>
        </div>
        <div id="event">
            <div class="titleWrap">
                <h2>이벤트</h2>
                <a href="community/event.php" class="viewMore">
                    더보기
                    <i class="icon">
                        <img src="images/main/plus_btn.png" alt="더보기 버튼">
                    </i>
                </a>
            </div>
            <div class="banner box01">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide01">
                            <a href="community/event.php">
                                <img src="images/main/event_box01_bn01_out.jpg" alt="카카오뱅크 체크카드로 결제하면 4천원 할인 이벤트 배너">
                            </a>
                        </div>
                        <div class="swiper-slide slide02">
                            <a href="community/event.php">
                                <img src="images/main/event_box01_bn02_out.jpg" alt="재개봉 전용관 오픈 이벤트 배너">
                            </a>
                        </div>
                        <div class="swiper-slide slide03">
                            <a href="community/event.php">
                                <img src="images/main/event_box01_bn03_out.jpg" alt="소원에 맞는 선물을 드려요 이벤트 배너">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="playBtn">
                    <a href="#"></a>
                </div>
                <div class="pauseBtn">
                    <a href="#"></a>
                </div>
            </div>
            <div class="banner box02">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide01">
                            <a href="community/event.php">
                                <img src="images/main/event_box02_bn01_out.jpg" alt="연인과 함께라면 1+1 이벤트 배너">
                            </a>
                        </div>
                        <div class="swiper-slide slide02">
                            <a href="community/event.php">
                                <img src="images/main/event_box02_bn02_out.jpg" alt="내맘대로 생맥주통 이벤트 배너">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div class="banner box03">
                <a href="community/event.php">
                    <img src="images/main/event_box03_bn01_out.jpg" alt="친환경 영화 관람 이벤트 배너">
                </a>
            </div>
            <div class="banner box04">
                <a href="community/event.php">
                    <img src="images/main/event_box04_bn01_out.jpg" alt="통큰 팝콘 할인 이벤트 배너">
                </a>
            </div>
        </div>
        <div id="notice">
            <h2>공지사항</h2>
            <ul>
                <li>
                    <a href="community/notice.php" tabindex="-1">광주독립영화관 할인 이벤트 안내</a>
                    <span class="date">2020-12-24</span>
                </li>
                <li>
                    <a href="community/notice.php" tabindex="-1">#SaveOurCinema #독립예술영화관후원</a>
                    <span class="date">2021-01-01</span>
                </li>
                <li>
                    <a href="community/notice.php" tabindex="-1">[긴급] 거리두기 2.5단계 격상에 따른 시간표 변경 안내</a>
                    <span class="date">2020-12-10</span>
                </li>
            </ul>
            <a href="community/notice.php" class="viewMore">
                더보기
                <i class="icon">
                    <img src="images/main/plus_btn.png" alt="더보기 버튼">
                </i>
            </a>
        </div>
        <div id="customer">
            <ul>
                <li class="center">
                    <a href="customer/faq.php">
                        <p>고객센터</p>
                    </a>
                </li>
                <li class="faq">
                    <a href="customer/faq.php">
                        <p>Q&amp;A</p>
                    </a>
                </li>
                <li class="person">
                    <a href="customer/person.php">
                        <p>1:1문의</p>
                    </a>
                </li>
                <li class="lost">
                    <a href="customer/lost.php">
                        <p>분실물신고</p>
                    </a>
                </li>
            </ul>
        </div>
        <div id="org">
            <div class="wrap">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide01">
                            <img src="images/main/org_bn01.png" alt="광주독립영화협회">
                        </div>
                        <div class="swiper-slide slide02">
                            <img src="images/main/org_bn02.png" alt="광주여성영화제">
                        </div>
                        <div class="swiper-slide slide03">
                            <img src="images/main/org_bn03.png" alt="필름에이지">
                        </div>
                        <div class="swiper-slide slide04">
                            <img src="images/main/org_bn04.png" alt="잇다">
                        </div>
                        <div class="swiper-slide slide05">
                            <img src="images/main/org_bn05.png" alt="M시네마라운지">
                        </div>
                        <div class="swiper-slide slide06">
                            <img src="images/main/org_bn06.png" alt="한국애니메이션학회">
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="playPause">
                    <a href="#"></a>
                </div>
            </div>
        </div>
        <footer>
            <div class="wrap">
                <h1>
                    <img src="images/common/footer_logo.png" alt="G.I.F 로고">
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
                                    <img src="images/common/footer_sns_twitter_icon.png" alt="트위터 아이콘">
                                </a>
                            </li>
                            <li>
                                <a href="http://facebook.com" target="_blank">
                                    <img src="images/common/footer_sns_facebook_icon.png" alt="페이스북 아이콘">
                                </a>
                            </li>
                            <li>
                                <a href="http://instagram.com" target="_blank">
                                    <img src="images/common/footer_sns_insta_icon.png" alt="인스타그램 아이콘">
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
        <div class="mobileBtn">
            <a href="http://mcinema68888.dothome.co.kr">모바일 버전</a>
        </div>
        <aside class="scrollTop">
            <a href="#"></a>
        </aside>
    </body>
</html>








