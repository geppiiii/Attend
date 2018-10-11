<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>出席管理システム</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<div class="container text-center" style="margin-top:10%"><h1>出席管理システム</h1></div>
<div class="container" style="margin-top:10%;">
    <form>
        <div  class="form-group">
            <label for="inputID">ID</label>
            <input type="text" class="form-control" id="inputID" placeholder="ID">
        </div>
        <div class="form-group">
            <label for="inputName">名前</label>
            <input type="text" class="form-control" id="inputName" placeholder="名前">
        </div>
        <div class="form-group">
            <label for="inputpassword">パスワード</label>
            <input type="password" class="form-control" id="inputpassword" placeholder="パスワード">
        </div>
        <div class="form-group">
            <label for="inputpassword-confirm">パスワード（確認用）</label>
            <input type="password" class="form-control" id="inputpassword-confirm" placeholder="パスワード（確認用）">
        </div>
        <button type="submit text-center" class="btn btn-primary">作成</button>
    </form>
</div>
    
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
</body>

</html>
