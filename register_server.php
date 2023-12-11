<?php
/*값을 받아오지 못하고 있는 건지 문제가 있는 건지 확인*/

// 데이터베이스 연결 설정
$servername = "localhost";
$username = "root";
$password = "cy1234";
$dbname = "loginweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//값 받아오기
$name = $_POST["username"];
$id = $_POST["userid"];
$pwd = $_POST["userpwd"];
$email = $_POST["email"];
$tel = $_POST["tel"];


// 회원가입 처리
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["가입하기"])) {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $result = $conn->query($sql);

    if ($result) {
        echo "회원가입 성공";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// 로그인 처리
// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
//     $username = $_POST["username"];
//     $password = $_POST["password"];

//     $sql = "SELECT * FROM users WHERE username='$username'";
//     $result = $conn->query($sql);

//     if ($result->num_rows > 0) {
//         $row = $result->fetch_assoc();
//         if (password_verify($password, $row["password"])) {
//             echo "로그인 성공";
//         } else {
//             echo "비밀번호가 일치하지 않습니다.";
//         }
//     } else {
//         echo "사용자가 존재하지 않습니다.";
//     }
// }

$conn->close();
?>
