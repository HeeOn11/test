<?php
/*값을 받아오지 못하고 있는 건지 문제가 있는 건지 확인*/

// 데이터베이스 연결 설정
$servername = "localhost";
$username = DB_USER;
$password = DB_PASS;
$dbname = "loginweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//값 받아오기
$name = $_GET["username"];
$id = $_GET["userid"];
$pwd = $_GET["userpwd"];
$email = $_GET["email"];
$tel = $_GET["tel"];


// 회원가입 처리
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["가입하기"])) {
    $username = $_GET["username"];
    $password = password_hash($_GET["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $result = $conn->query($sql);

    if ($result) {
        echo "회원가입 성공";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
