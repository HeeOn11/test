<?php

/*아직 데이터베이스 구축을 하지 않았습니다.

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 사용자로부터 입력 받은 회원가입 데이터
    $username = $_POST[DB_USER];
    $password = $_POST[DB_PASS];
    
    // 여기에서 회원 데이터를 데이터베이스에 저장하는 등의 작업을 수행해야 합니다.
    // 예시로는 데이터베이스에 연결하는 코드만 작성합니다.
    $conn = new mysqli("localhost", "username", "password", "database_name");

    // 연결 오류 확인
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // 회원 데이터를 데이터베이스에 삽입하는 SQL 쿼리
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "회원가입이 성공적으로 완료되었습니다.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // 데이터베이스 연결 종료
    $conn->close();
}*/
?>
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
      <button type="submit">가입하기</button>
    </form>
  </body>
</html>
