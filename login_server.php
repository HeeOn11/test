<?php
// 데이터베이스 연결 설정
$servername = "localhost";
$username = "root";
$password = "cy1234";
$dbname = "loginweb";


// 값 받아오기
$id = $_POST["userid"];
$user_input_pwd = $_POST["userpwd"];

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
        
    // 비밀번호 확인
    if (password_verify($user_input_pwd,$user['hash_pwd'])) {
        echo "로그인 성공";
    } else {
        echo "비밀번호가 일치하지 않습니다";
//        echo "데이터베이스 해시 비밀번호" .$user['hash_pwd'];
//        echo "입력한 비밀번호:";
//        echo password_hash($user_input_pwd, PASSWORD_DEFAULT);
    }
} else {
    echo "일치하는 사용자가 없습니다";
}

$stmt->close();
$conn->close();
?>
