<?php
include("db_config.php");

    // 데이터베이스 연결 설정
    $db = new PDO('mysql:host=localhost;dbname=boardweb;charset=utf8', DB_USER, DB_PASS);

    // URL에서 'id' 파라미터 가져오기
    $id = isset($_GET['id']) ? $_GET['id'] : 0;

    // 게시글 조회 쿼리 실행
    $stmt = $db->prepare("SELECT * FROM board WHERE Idx = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // 게시글이 존재하지 않을 경우 처리
    if (!$row) {
        echo "게시글이 존재하지 않습니다.";
        exit;
    }
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($row['title']); ?></title>
</head>
<body>
    <h1><?php echo htmlspecialchars($row['title']); ?></h1>
    <p>작성자: <?php echo htmlspecialchars($row['id']); ?></p>
    <p>작성일: <?php echo htmlspecialchars($row['date']); ?></p>
    <p>내용:</p>
    <div>
        <?php echo nl2br(htmlspecialchars($row['content'])); ?>
    </div>
    <button type="button" onclick="location.href='index.php'">back</button>
    <button type="button" onclick="location.href='edit.php'">edit</button>
</body>
</html>
