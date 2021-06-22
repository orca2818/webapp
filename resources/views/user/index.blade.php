<head>
  <title>Laravel Sample</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">ユーザ一覧</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center table-striped">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">ユーザ名</th>
        <th class="text-center">Eメール</th>
        <th class="text-center">編集</th>
        <th class="text-center">削除</th>
      </tr>
      @foreach($users as $user)
      <tr>
        <td><a href="/user/{{ $user -> id}}">{{ $user -> id}}</a></td>
        <td>{{ $user -> name }}</td>
        <td>{{ $user -> email }}</td>
        <td>
          <form action="/user/edit/{{ $user->id }}" method="post">
            <!--input type="hidden" name="_method" value="EDIT"-->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-primary" aria-label="Left Align">編集</button>
          </form>
        </td>
        <td>
          <form action="/user/delete/{{ $user->id }}" method="post">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-danger" aria-label="Left Align">削除</button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
</div>