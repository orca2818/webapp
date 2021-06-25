<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>
<body>
  <div class="container">
  <div id="contents">
  <div class="row">
  <div class="col">

  <div class="card mx-auto mt-5" style="width: 300px;">
  
  <div class="card-header">
      <h4 style="text-align: center;">ログイン</h4>
  </div>
  
  <div class="card-body mx-auto">
      <form action="/home" method="post">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
          <label for="id">ユーザID</label>
          <input type="text" class="form-control" id="id" name="id" placeholder="UserID" required autofocus>
          <label for="password" class="mt-2">パスワード</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="PassWord" required autofocus>
          <div class="form-check my-3">
          <input type="checkbox" class="form-check-input" id="remember">
          <label for="remember" class="form-check-label">ユーザ名を覚えておく</label>
          </div>
          <button type="submit" class="btn btn-primary mx-5">ログイン</button>
          </div>
      </form>
  </div>
  </div>

  </div><!--.col-->
  </div><!--.row-->
  </div><!--#contents-->
  </div><!--.container-->
</body>
<html>