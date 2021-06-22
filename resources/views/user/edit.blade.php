<head>
  <title>Laravel Sample</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<div class="container ops-main">
  <div class="row">
      <div class="col-md-6">
          <h2>ユーザ情報変更</h2>
      </div>
  </div>
  <div class="row">
      <div class="col-md-8 col-md-offset-1">
          <form action="/user/update/{{ $user->id }}" method="post">
              <!-- updateメソッドにはPUTメソッドがルーティングされているのでPUTにする -->
              <input type="hidden" name="_method" value="put">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                  <label for="name">ユーザ名</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
              </div>
              <div class="form-group">
                  <label for="email">Eメール</label>
                  <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
              </div>
              <button type="submit" class="btn btn-primary">変更</button>
          </form>
      </div>
  </div>
  <div class="row">
    <div class="col-md-8 col-md-offset-1">
      <a href="/user">戻る</a>
    </div>
  </div>
</div>