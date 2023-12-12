<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>join</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>회원가입</h1>
    <form action="register_server.php" method="GET">
      <label for="username">성함</label>
      <input type="text" id="username" name="username" required placeholder="이름" />

      <label for="userid">아이디</label>
      <input
        type="text"
        id="userid"
        name="userid"
        required
        placeholder="아이디"
        minlength="3"
        maxlength="10"
      />

      <label for="userpwd">비밀번호</label>
      <input
        type="password"
        id="userpwd"
        name="userpwd"
        required
        placeholder="비밀번호"
        minlength="8"
      />

      <label for="email">이메일</label>
      <input type="email" id="email" name="email" required placeholder="이메일" />

      <label for="user-tel">전화번호</label>
      <input
        type="tel"
        id="tel"
        name="tel"
        required
        placeholder="전화번호 (***-****-****)"
        pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}"
      />

      <button type="submit">가입하기</button>
    </form>
  </body>
</html>
