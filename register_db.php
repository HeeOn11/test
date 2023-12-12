<?php
// 데이터베이스 연결 설정
$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "loginweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 회원 정보 조회 쿼리 실행
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// 결과 출력
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["userid"] . "<br>";
        echo "Username: " . $row["username"] . "<br>";
        echo "password: ". $row["password"] ."<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Tel: " . $row["tel"] . "<br>";
        echo "<hr>";
    }
} else {
    echo "등록된 회원이 없습니다.";
}

$conn->close();
?>
