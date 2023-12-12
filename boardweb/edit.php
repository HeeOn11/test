<?php
echo"Welcome! but this site has NOT data :(";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>글 수정</title>
</head>
<body>
    <h1>글 수정</h1>
    <form action="edit.php?id=<?php echo $id; ?>" method="post">
        <label for="title">제목:</label><br>
        
        <label for="content">내용:</label><br>
        
        <input type="submit" value="변경 사항 저장">
    </form>
    <button type="button" onclick="location.href='index.php'">back</button>
</body>
</html>
