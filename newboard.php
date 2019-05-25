<!-- 게시물 작성 -->
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>글작성</title>
</head>
<body>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
  <form action="plusboard.php" method="POST">
    <input class="form-control" type="text" placeholder=<?php echo $_SESSION['name']?> readonly>
  <div class="form-group">
    <label for="exampleFormControlInput1">title</label>
    <input type="test" name="title" class="form-control" id="exampleFormControlInput1" placeholder="title here">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Content area</label>
    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">작성하기</button>
</form>
<br>
<a href="gallery.php" class="btn btn-primary">게시판으로</a>
  </div>
</div>

</body>
</html>