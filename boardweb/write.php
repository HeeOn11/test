<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>글 작성</title>
</head>
<body>
    <h1>글 작성하기</h1>
    <form action="write_db.php" method="POST">
    <label for="title">제목: </label>
      <input type="text" id="title" name="title" required placeholder="제목" />
    <!-- <label for="id">아이디</label>
      <input
        type="text"
        id="id"
        name="id"
        required
        placeholder="아이디"
        minlength="3"
        maxlength="10"
      /> -->

      <label for="content">내용: </label>
        <textarea id="content" name="content"required></textarea>

      <label for="name">글쓴이: </label>
      <input type="text" id="name" name="name" required/>
      <button type="submit">글쓰기</button>
    </form>
</body>
</html>

