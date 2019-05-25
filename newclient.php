<!-- 새로운 유저를 입력받는 페이지 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>회원가입</title>
</head>
<body>
<div class="jumbotron jumbotron-fluid" style="margin:0 auto;width: 80%;border-radius:50px;">
  <div class="container">
    <h1 class="display-4">회원가입 페이지입니다.</h1>
    <p class="lead">사용하고싶은 아이디와 비밀번호를 입력하여주세요.</p>
    <form action="createaccount.php" method="post">
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">ID</span>
  </div>
  <input name="id" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">NAME</span>
  </div>
  <input name="name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">PASSWORD</span>
  </div>
  <input name="password" type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<button type="submit" class="btn btn-primary">Create Your Account</button>
    </form>
  </div>
</div>
</body>
</html>