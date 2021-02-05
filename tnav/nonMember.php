<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <title>비회원예매확인 - G.I.F</title>
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/nonMember.css">
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/nonMember.js"></script>
    </head>
    <body>
        <div id="nonMemberBox">
            <h2>비회원 예매확인</h2>
            <form action="#">
                <p class="subscript">
                    <span class="star">*</span>
                    필수입력항목
                </p>
                <table>
                    <caption>정보입력란</caption>
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
                            생년월일
                        </th>
                        <td class="birth">
                            <select id="birthYear" class="box02"></select>
                            <label for="birthYear">년</label>
                            <select id="birthMonth" class="box03"></select>
                            <label for="birthMonth">월</label>
                            <select id="birthDate" class="box03"></select>
                            <label for="birthDate">일</label>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span class="star">*</span>
                            <label for="ticketPw" class="title">예매 비밀번호</label>
                        </th>
                        <td>
                            <input type="password" id="ticketPw" maxlength="4" placeholder="예매 비밀번호 (4자리)를 입력해주세요." class="pwBox">
                        </td>
                    </tr>
                </table>
                <p class="descript">
                    ※ 비회원 로그인 시 예매 및 예매확인/취소 메뉴만 이용 가능하며 기타 결제 및 할인수단은 정회원 로그인 시 사용 가능 합니다.<br>
                    더 많은 혜택을 누리고 싶으시다면 회원가입 해주세요~
                </p>
                <div class="btnWrap">
                    <input type="button" value="회원가입" id="joinBtn" onclick="parent.location.href='../tnav/join.php'">
                    <label for="joinBtn" class="away">회원가입버튼</label>
                    <input type="submit" value="비회원 예매확인" id="confirmBtn">
                    <label for="confirmBtn" class="away">비회원예매확인버튼</label>
                </div>
            </form>
        </div>
    </body>
</html>