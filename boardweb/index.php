<?php
include("db_config.php");
?>

<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>board</title>
  </head>
  <body>
    <h1>자유게시판</h1>
    <table class="list-table">
      <thead>
        <tr>
          <th width="70">번호</th>
          <th width="500">제목</th>
          <th width="120">글쓴이</th>
          <th width="100">작성일자</th>
        </tr>
      </thead>
      <tbody>
        <?php
            //데이터베이스 연결
            $db = new PDO('mysql:host=localhost;dbname=boardweb;charset=utf8', DB_USER, DB_PASS);

            //게시글 목록
            $stmt = $db -> query('SELECT * FROM board ORDER BY Idx DESC');

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo '<tr>';
                echo '<td>'.$row['Idx'].'</td>';

                echo '<td><a href="view.php?id='.$row['Idx'].'">'.$row['title'].'</a></td>';
                
                echo '<td>'.$row['id'].'</td>';
                echo '<td>'.$row['date'].'</td>'; // 날짜 표시
                echo '</tr>'; // 테이블 행 끝
            }
      ?>
    </table>
    <button type="button" onclick="location.href='write.php'">글쓰기</button>
    <button type="button" onclick="location.href='register.php'">회원가입</button>
</html>
