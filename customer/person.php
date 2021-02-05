<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <title>1:1문의 - G.I.F</title>
        <link rel="shortcut icon" href="../images/common/favicon_16x16.png">
        <link rel="icon" sizes="192x192" href="../images/common/favicon_android_192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/common/favicon_ios_180x180.png">
        <link rel="stylesheet" href="../css/colorbox.css">
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
        <link rel="stylesheet" href="../css/person.css">
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
					<li class="first out"><a href="faq.php">Q&amp;A</a></li>
					<li class="middle active"><a href="person.php">1:1문의</a></li>
					<li class="last out"><a href="lost.php">분실물신고</a></li>
				</ul>
            </nav>
            <div id="personBox">
                <form action="#">
                    <p class="subscript">
                        <span class="star">*</span>
                        필수입력항목
                    </p>
                    <table>
                        <caption>문의내용 입력란</caption>
                        <tr>
                            <th>
                                <span class="star">*</span>
                                <label for="name" class="title">이름</label>
                            </th>
                            <td>
                                <input type="text" id="name" placeholder="이름을 입력해주세요." class="nameBox">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <span class="star">*</span>
                                <label for="phone01" class="title">휴대폰</label>
                            </th>
                            <td>
                                <select id="phone01" class="phoneBox">
                                    <option>010</option>
                                    <option>011</option>
                                    <option>016</option>
                                    <option>017</option>
                                    <option>018</option>
                                    <option>019</option>
                                </select>
                                -
                                <input type="text" id="phone02" maxlength="4" class="phoneBox">
                                <label for="phone02" class="away">휴대폰 가운데 4자리입력</label>
                                -
                                <input type="text" id="phone03" maxlength="4" class="phoneBox">
                                <label for="phone03" class="away">휴대폰 마지막 4자리입력</label>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <span class="star">*</span>
                                <label for="faqTitle" class="title">문의제목</label>
                            </th>
                            <td class="birth">
                                <input type="text" id="faqTitle" placeholder="제목을 입력해주세요." class="titleBox">
                            </td>
                        </tr>
                        <tr class="last">
                            <th>
                                <span class="star">*</span>
                                <label for="faqContent" class="title">문의내용</label>
                            </th>
                            <td>
                                <textarea name="faq" id="faqContent" cols="30" rows="10" placeholder="내용을 입력해주세요." class="cBox"></textarea>
                            </td>
                        </tr>
                    </table>
                    <div class="btnWrap">
                        <button type="submit">문의하기</button>
                    </div>
                </form>
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








