<?php
// 데이터베이스 연결 설정
$servername = "localhost";
$username = DB_USER;
$password = DB_PASS;
$dbname = "loginweb";


// 값 받아오기
$id = $_GET["userid"];
$user_input_pwd = $_GET["userpwd"];

$conn = new mysqli($servername, $username, $password, $dbname);

//데이터베이스 연결 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL 쿼리 실행
$sql = "SELECT * FROM users WHERE username=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();

// 데이터베이스랑 비교
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    /*비밀번호가 일치하는데도 일치하지 않는다는 오류 발생
    해시값이 다른 것으로 확인*/
    // 비밀번호 확인
    if (password_verify($user_input_pwd,$user['hash_pwd'])) {
        echo "로그인 성공";
    } else {
        echo "비밀번호가 일치하지 않습니다";
    }
} else {
    echo "일치하는 사용자가 없습니다";
}

$stmt->close();
$conn->close();
?>
