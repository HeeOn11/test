<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <title>MAIN-PAGE</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>환영합니다</h1>
    <form action="login_server.php" method="GET">
      <lable for="userid">아이디</lable>

      <input
        type="text"
        id="userid"
        name = "userid"
        pattern="[A-Za-z-09]+"
        placeholder="아이디를 입력하세요"
        minlength="3"
        maxlength="13"
        required
      />
      <lable for="userpwd">비밀번호</lable>
      <input
        type="password"
        id="userpwd"
        name = "userpwd"
        placeholder="비밀번호를 입력하세요"
        minlength="8"
      />

      <button type="submit">로그인</button>
      <button type="button" onclick="location.href='join.php'">
        회원가입
      </button>
      <!-- <a href="join.html">회원가입</a> -->
    </form>
  </body>
</html>
