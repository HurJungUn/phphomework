<!-- 게시물 보기 -->
<?php
    require ("db.php");
    $id = $_GET['id'];
    $sql = "SELECT * FROM board WHERE id = ?";
    $q = $con->prepare($sql);
    $q->execute([$id]);

    $board = $q->fetch(PDO::FETCH_OBJ);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?php echo $board->title?></title>
</head>
<body>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
  <form action="updateboard.php" method="POST">
    <input class="form-control" name="id" type="text" value=<?php echo $board->id?> readonly>
    <br>
    <input class="form-control" name="writer" type="text" value=<?php echo $board->writer?> readonly>
    <br>
  <div class="form-group">
    <label for="exampleFormControlInput1">title</label>
    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" value=<?php echo $board->title?>>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Content area</label>
    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3">
    <?php echo $board->content?>
    </textarea>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">수정하기</button>
</form>
<br>
<a href="deleteboard.php?id=<?php echo $board->id?>" class="btn btn-primary">삭제하기</a>
<br>
<br>
<a href="gallery.php" class="btn btn-primary">게시판으로</a>
  </div>
  
</div>
</body>
</html>