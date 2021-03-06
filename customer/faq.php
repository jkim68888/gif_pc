<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <title>Q&amp;A - G.I.F</title>
        <link rel="shortcut icon" href="../images/common/favicon_16x16.png">
        <link rel="icon" sizes="192x192" href="../images/common/favicon_android_192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/common/favicon_ios_180x180.png">
        <link rel="stylesheet" href="../css/colorbox.css">
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
        <link rel="stylesheet" href="../css/faq.css">
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/jquery.colorbox-min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/common.js"></script>
        <script src="../js/sub.js"></script>
        <script src="../js/faq.js"></script>
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
                            <a href="../community/notice.php" class="mainNav">커뮤니티</a>
                            <ul class="subNav">
                                <li><a href="../community/notice.php">공지사항</a></li>
                                <li><a href="../community/event.php">이벤트</a></li>
                                <li><a href="../community/news.php">언론</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="faq.php" class="mainNav">고객센터</a>
                            <ul class="subNav customer">
                                <li><a href="faq.php">Q&amp;A</a></li>
                                <li><a href="person.php">1:1문의</a></li>
                                <li><a href="lost.php">분실물신고</a></li>
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
                <h2>고객센터</h2>
            </div>
            <nav id="subMenu">
                <ul>
					<li class="first active"><a href="faq.php">Q&amp;A</a></li>
					<li class="middle out"><a href="person.php">1:1문의</a></li>
					<li class="last out"><a href="lost.php">분실물신고</a></li>
				</ul>
            </nav>
            <div id="faqBox">
                <div class="searchBox">
                    <input type="search" placeholder="궁금한 사항을 입력해주세요." id="searchQA">
                    <label for="searchQA" class="away">Q&amp;A 입력상자</label>
                    <button type="submit"></button>
                </div>
                <div class="faqWrap">
                    <div class="tabBar">
                        <ul>
                            <li>
                                <a href="#move_tab">
                                    <p class="member">회원가입<br>/탈퇴</p>
                                </a>
                            </li>
                            <li>
                                <a href="#move_tab">
                                    <p>회원혜택</p>
                                </a>
                            </li>
                            <li>
                                <a href="#move_tab">
                                    <p>결제방법</p>
                                </a>
                            </li>
                            <li>
                                <a href="#move_tab">
                                    <p>이용후기</p>
                                </a>
                            </li>
                            <li>
                                <a href="#move_tab">
                                    <p>기타</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <div class="tab01">
                            <ul>
                                <li><a href="">Q. 회원가입시 기입하는 정보는 누구에게 제공되나요?</a></li>
                                <li><a href="">Q. 회원탈퇴 후 재가입이 가능한가요?</a></li>
                                <li><a href="">Q. 회원탈퇴시 홈페이지 사용기록이 없어지나요?</a></li>
                                <li><a href="">Q. 회원탈퇴는 어떻게 하나요?</a></li>
                                <li><a href="">Q. 회원정보를 변경하려면 어떻게 하나요?</a></li>
                                <li><a href="">Q. 해외거주중인데 회원가입할 수 있나요?</a></li>
                                <li><a href="">Q. 외국인도 회원가입이 가능한가요?</a></li>
                            </ul>
                        </div>
                        <div class="tab02">
                            <ul>
                                <li><a href="">Q. 비회원예매와 회원예매의 차이점이 무엇인가요?</a></li>
                                <li><a href="">Q. 회원이 되면 할인혜택이 있나요?</a></li>
                                <li><a href="">Q. 회원등급은 어떻게 나눠지나요?</a></li>
                                <li><a href="">Q. 회원에게 제공되는 특별한 혜택은 무엇인가요?</a></li>
                                <li><a href="">Q. 회원 멤버십이 있나요?</a></li>
                            </ul>
                        </div>
                        <div class="tab03">
                            <ul>
                                <li><a href="">Q. 결제수단에는 무엇이 있나요?</a></li>
                                <li><a href="">Q. 결제수단을 바꾸고 싶어요!</a></li>
                                <li><a href="">Q. 결제취소는 어떻게 하나요?</a></li>
                                <li><a href="">Q. 결제취소 후 지불했던 돈은 언제 입금되나요?</a></li>
                            </ul>
                        </div>
                        <div class="tab04">
                            <ul>
                                <li><a href="">Q. 영화를 보고 난 후 리뷰를 작성할 수 있나요?</a></li>
                                <li><a href="">Q. 리뷰 작성 후 수정은 어떻게 하나요?</a></li>
                            </ul>
                        </div>
                        <div class="tab05">
                            <ul>
                                <li><a href="">Q. 고객센터를 방문하고 싶어요!</a></li>
                                <li><a href="">Q. 고객센터 연결이 안되요!</a></li>
                                <li><a href="">Q. 고객센터 상담사님이 불친절해요!</a></li>
                                <li><a href="">Q. 건의사항이 있습니다.</a></li>
                            </ul>
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








