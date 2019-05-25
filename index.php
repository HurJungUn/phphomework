<!-- 메인페이지 -->
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/indexstyle.css">
    <title>YDinside</title>
</head>
<body>

<div class="jumbotron">
  <h1 class="display-4">YDinside</h1>
  <p class="lead">양디갤러리</p>
  <hr class="my-4">
  <p>LOGIN</p>
  <form action="login.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">ID</label>
    <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ID">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
  <a href="newclient.php" class="btn btn-primary">create account</a>
</form>
</div>

</body>
</html>