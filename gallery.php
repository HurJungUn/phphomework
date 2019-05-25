<!-- 갤러리전체보기 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>YDinside</title>
</head>
<body>
    <!-- select문으로전부가져와테이블로 뿌려줌. -->
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">TITLE</th>
      <th scope="col">CONTENT</th>
      <th scope="col">WRITER</th>
    </tr>
  </thead>
  <tbody>

  <?php
    require ("db.php");
    $sql = "SELECT * FROM board";
    $q = $con->prepare($sql);
    $q->execute();

    $list = $q->fetchAll(PDO::FETCH_OBJ);

    foreach($list as $board) { 
        echo "<tr>";
        echo "<td> $board->id </td>";
        echo "<td><a href='board.php?id=$board->id' style='text-decoration:none; color:white;'> $board->title </a></td>";
        echo "<td>" . iconv_substr($board->content, 0 , 2) . "...</td>";
        echo "<td> $board->writer </td>";
        echo "</tr>";
    }
?>  
  </tbody>
</table>
<a href="logout.php"><button type="button" class="btn btn-primary btn-lg">로그아웃</button></a>
<a href="newboard.php"><button type="button" class="btn btn-secondary btn-lg">글쓰기</button></a>
</body>
</html>