<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <title>회원가입 정보등록 - G.I.F</title>
        <link rel="shortcut icon" href="../images/common/favicon_16x16.png">
        <link rel="icon" sizes="192x192" href="../images/common/favicon_android_192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/common/favicon_ios_180x180.png">
        <link rel="stylesheet" href="../css/colorbox.css">
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
        <link rel="stylesheet" href="../css/join.css">
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/jquery.colorbox-min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/common.js"></script>
        <script src="../js/sub.js"></script>
        <script src="../js/join.js"></script>
        <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    </head>
    <body>
        <?
            //폼에 적용시킬 데이터를 가져올 PHP
            //로그인되어 있는 아이디의 데이터를 가져옴
            //DB연결
            include "../lib/dbconn.php";

            //데이터 조회 - 로그인된 아이디의 데이터만 연관배열로 가져옴
            $sql = "SELECT * FROM member WHERE id='$userid'";
            $result = mysqli_query($connect, $sql);
        
            //해당 레코드의 값을 연관배열로 가져옴
            $row = mysqli_fetch_assoc($result);

            //폼에 적용할 데이터 담는 변수
            $id = $row['id'];
            $name = $row['name'];
            $post = $row['post'];

            //생년월일 배열로 받기
            $birth = explode("-", $row['birth']); //문자열을 배열로 바꾸는 함수
            $birth01 = $birth[0];
            $birth02 = $birth[1];
            $birth03 = $birth[2];

            //이메일값 배열로 처리
            $email = explode("@", $row['email']);
            $email01 = $email[0];
            $email02 = $email[1];

            //주소값 배열로 처리
            $address = explode("|", $row['address']);
            $address01 = $address[0];
            $address02 = $address[1];

            //휴대폰 배열로 받기
            $phone = explode("-", $row['phone']);
            $phone01 = $phone[0];
            $phone02 = $phone[1];
            $phone03 = $phone[2];

            //chk관련
            $phonechk = $row['phonechk'];
            $emailchk = $row['emailchk'];
            

            //DB연결 종료
            mysqli_close($connect);
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
                            <a href="../community/notice.php" class="mainNav">커뮤니티</a>
                            <ul class="subNav">
                                <li><a href="../community/notice.php">공지사항</a></li>
                                <li><a href="../community/event.php">이벤트</a></li>
                                <li><a href="../community/news.php">언론</a></li>
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
            <h2>회원가입</h2>
            <div class="joinFlow">
                <ul>
                    <li class="active">01<br>회원약관동의</li>
                    <li class="active">02<br>회원정보등록</li>
                    <li>03<br>회원가입완료</li>
                </ul>
            </div>
            <div class="joinClause">
                <p class="numTop">01</p>
                <h4>기본정보 (<span class="orange">*</span>는 필수 정보입니다)</h4>
                <!--데이터 전송은 insert.php에 해서 DB에 데이터를 추가할것!-->
                <form name="join_form" id="joinForm" method="post" action="modify.php">
                    <table>
                        <caption>회원정보</caption>
                        <tr>
                            <th>
                                <span class="orange">*</span>
                                <label for="joinName">이름</label>
                            </th>
                            <td>
                                <input type="text" name="name" id="joinName" class="box01" value="<?=$name?>">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <span class="orange">*</span>
                                <label for="joinId">아이디</label>
                            </th>
                            <td>
                                <!--아이디는 변경할수 없도록 처리-->
                                <?=$id?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <span class="orange">*</span>
                                <label for="joinPw">비밀번호</label>
                            </th>
                            <td>
                                <input type="password" name="pass" id="joinPw" class="box01" maxlength="20">
                                ※ 공백없이 영문(소), 숫자 6~20자 사용가능
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <span class="orange">*</span>
                                <label for="joinPwChk">비밀번호 확인</label>
                            </th>
                            <td>
                                <input type="password" name="passchk" id="joinPwChk" class="box01" maxlength="20">
                                <span class="red">비밀번호가 같지 않습니다.</span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <span class="orange">*</span>
                                생년월일
                            </th>
                            <td>
                                <!--option태그를 제이쿼리로 제작-->
                                <select name="birth01" id="birth01" class="box02"></select>
                                <label for="birth01">년</label>
                                <select name="birth02" id="birth02" class="box02"></select>
                                <label for="birth02">월</label>
                                <select name="birth03" id="birth03" class="box02"></select>
                                <label for="birth03">일</label>
                                <input type="hidden" id="bYear" value="<?=$birth01?>">
                                <input type="hidden" id="bMonth" value="<?=$birth02?>">
                                <input type="hidden" id="bDate" value="<?=$birth03?>">
                                <label for="bYear" class="away">년데이터</label>
                                <label for="bMonth" class="away">월데이터</label>
                                <label for="bDate" class="away">일데이터</label>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <span class="orange">*</span>
                                <label for="postNum">주소</label>
                            </th>
                            <td>
                                <input type="text" name="post" id="postNum" class="box01" maxlength="5" value="<?=$post?>">
                                <button type="button" id="postBtn" onclick="sample2_execDaumPostcode()">우편번호찾기</button>
                                <br>
                                <input type="text" name="addr01" id="addr01" class="box01" value="<?=$address01?>">
                                <label for="addr01" class="away">주소입력상자</label>
                                <input type="text" name="addr02" id="addr02" class="box01" placeholder="나머지 주소를 입력하세요." value="<?=$address02?>">
                                <label for="addr02" class="away">나머지주소입력상자</label>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <span class="orange">*</span>
                                <label for="phone01">휴대폰</label>
                            </th>
                            <td>
                                <label for="phone02" class="away">휴대폰두번째입력상자</label>
                                <label for="phone03" class="away">휴대폰세번째입력상자</label>
                                <select name="phone01" id="phone01" class="box02">
                                    <?
                                        switch($phone01){
                                            case "010":
                                                ?>
                                                <option value="010" selected>010</option>
                                                <option value="011">011</option>
                                                <option value="016">016</option>
                                                <option value="017">017</option>
                                                <option value="018">018</option>
                                                <option value="019">019</option>
                                                <?
                                                break;
                                            case "011":
                                                ?>
                                                <option value="010">010</option>
                                                <option value="011" selected>011</option>
                                                <option value="016">016</option>
                                                <option value="017">017</option>
                                                <option value="018">018</option>
                                                <option value="019">019</option>
                                                <?
                                                break;
                                            case "016":
                                                ?>
                                                <option value="010">010</option>
                                                <option value="011">011</option>
                                                <option value="016" selected>016</option>
                                                <option value="017">017</option>
                                                <option value="018">018</option>
                                                <option value="019">019</option>
                                                <?
                                                break;
                                            case "017":
                                                ?>
                                                <option value="010">010</option>
                                                <option value="011">011</option>
                                                <option value="016">016</option>
                                                <option value="017" selected>017</option>
                                                <option value="018">018</option>
                                                <option value="019">019</option>
                                                <?
                                                break;
                                            case "018":
                                                ?>
                                                <option value="010">010</option>
                                                <option value="011">011</option>
                                                <option value="016">016</option>
                                                <option value="017">017</option>
                                                <option value="018" selected>018</option>
                                                <option value="019">019</option>
                                                <?
                                                break;
                                            case "019":
                                                ?>
                                                <option value="010">010</option>
                                                <option value="011">011</option>
                                                <option value="016">016</option>
                                                <option value="017">017</option>
                                                <option value="018">018</option>
                                                <option value="019" selected>019</option>
                                                <?
                                                break;
                                        }
                                    ?>
                                </select>
                                -
                                <input type="text" name="phone02" id="phone02" class="box02" maxlength="4" value="<?=$phone02?>">
                                -
                                <input type="text" name="phone03" id="phone03" class="box02" maxlength="4" value="<?=$phone03?>">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <span class="orange">*</span>
                                SMS 수신여부
                            </th>
                            <td>
                                <?
                                    //$phonechk이 yes면 수신쪽에 체크, 그렇지 않으면 수신하지 않음에 체크
                                    if($phonechk == 'yes'){
                                        ?>
                                        <input type="radio" name="smsreception" id="smsYes" value="yes" checked>
                                        <label for="smsYes">수신</label>
                                        <input type="radio" name="smsreception" id="smsNo" value="no">
                                        <label for="smsNo">수신하지 않음</label>
                                        <?
                                    }else{
                                        ?>
                                        <input type="radio" name="smsreception" id="smsYes" value="yes">
                                        <label for="smsYes">수신</label>
                                        <input type="radio" name="smsreception" id="smsNo" value="no" checked>
                                        <label for="smsNo">수신하지 않음</label>
                                        <?
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <span class="orange">*</span>
                                <label for="email01">이메일</label>
                            </th>
                            <td>
                                <label for="email02" class="away">이메일직접입력</label>
                                <label for="email03" class="away">이메일선택상자</label>
                                <input type="text" name="email01" id="email01" class="box03" value="<?=$email01?>">
                                <span class="at">@</span>
                                <input type="text" name="email02" id="email02" class="box03" placeholder="직접입력" value="<?=$email02?>">
                                <select name="email03" id="email03" class="box03">
                                    <option value="naver.com">naver.com</option>
                                    <option value="google.com">google.com</option>
                                    <option value="hanmail.net">hanmail.net</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th class="last">
                                <span class="orange">*</span>
                                이메일 수신여부
                            </th>
                            <td class="last">
                                <?
                                    if($emailchk == 'yes'){
                                        ?>
                                            <input type="radio" name="emailreception" id="emailYes" value="yes" checked>
                                            <label for="emailYes">수신</label>
                                            <input type="radio" name="emailreception" id="emailNo" value="no">
                                            <label for="emailNo">수신하지 않음</label>
                                        <?    
                                    }else{
                                        ?>
                                            <input type="radio" name="emailreception" id="emailYes" value="yes">
                                            <label for="emailYes">수신</label>
                                            <input type="radio" name="emailreception" id="emailNo" value="no" checked>
                                            <label for="emailNo">수신하지 않음</label>
                                        <?
                                    }
                                ?>
                            </td>
                        </tr>
                    </table>
                    <div class="btnWrap">
                        <button type="submit" id="submitBtn02">정보수정</button>
                        <button type="reset">입력취소</button>
                    </div>
                    <div id="layer">
                        <img src="http://t1.daumcdn.net/postcode/resource/images/close.png" id="btnCloseLayer" onclick="closeDaumPostcode()" alt="닫기 버튼">
                    </div>
                    <script src="../js/post.js"></script>
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








