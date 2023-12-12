<?php
include("db_config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 데이터베이스 연결
    $db = new PDO('mysql:host=localhost;dbname=boardweb;charset=utf8', DB_USER, DB_PASS);

    // POST 데이터 가져오기
    $title = $_POST['title'];
    $content = $_POST['content'];
    $id = $_POST['id'];

    // 데이터베이스에 데이터 삽입
    $stmt = $db->prepare("INSERT INTO board (title, content) VALUES (:title, :content)");
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':content', $content);

    // 쿼리 실행
    $stmt->execute();

    // 게시판 목록 페이지로 리디렉션
    header('Location: index.php');
    exit;
}
?>
