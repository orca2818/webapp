<head>
  <title>Laravel Sample</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">{{ $user -> name }}</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">ユーザ名</th>
        <th class="text-center">Email</th>
      </tr>
      <tr>
        <td>{{ $user -> id}}</td>
        <td>{{ $user -> name }}</td>
        <td>{{ $user -> email }}</td>
      </tr>
    </table>
    <a href="/user">一覧へ</a>
  </div>
</div>