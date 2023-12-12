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
            $db = new PDO('mysql:host=localhost;dbname=boardweb;charset=utf8', 'root', 'cy1234');

            //데이터베이스에서 게시글 목록을 가져오는
            $stmt = $db -> query('SELECT * FROM board ORDER BY Idx DESC');

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo '<tr>'; // 테이블 행 시작
                echo '<td>'.$row['Idx'].'</td>'; // 인덱스 표시
                echo '<td>'.$row['title'].'</td>'; // 제목 표시
                echo '<td>'.$row['id'].'</td>'; // 사용자 ID 표시 (작성자 이름을 나타내는 것으로 가정)
                echo '<td>'.$row['date'].'</td>'; // 날짜 표시
                echo '</tr>'; // 테이블 행 끝
            }
      ?>
    </table>
    <table>
</html>
