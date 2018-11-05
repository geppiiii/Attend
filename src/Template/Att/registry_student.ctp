<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>出席管理システム</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="#">出席管理システム</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample02">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="home.html">HR確認画面</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lesson-confirm.html">授業中確認画面</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="daily-output.html">日報出力画面</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="monthly-output.html">月報出力画面</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">生徒登録画面</a>
            </li>
            <li class="nav-item mr-md-0">
                <a class="nav-link" href="../Teachers/login">ログアウト</a>   
            </li>
            </ul>
            
        </div>
    </nav>
<div class="container text-center"><h2>生徒登録</h2></div>
<div class="container">
    <form>
        <div  class="form-group">
            <label for="inputIcnum">カード番号</label>
            <input type="text" class="form-control" id="inputIcnum" placeholder="カード番号">
        </div>
        <div  class="form-group">
            <label for="inputNum">学籍番号</label>
            <input type="text" class="form-control" id="inputNum" placeholder="学籍番号">
        </div>
        <div class="form-group">
            <label for="inputName">名前</label>
            <input type="text" class="form-control" id="inputName" placeholder="名前">
        </div>
        <div class="form-group">
            <label for="inpuptClass">学科・クラス</label>
            <input type="text" class="form-control" id="inputClass" placeholder="学科">
            <input type="number" class="form-control" id="inputClassA" placeholder="クラス">
        </div>
        <div class="form-group">
            <label for="inputYear">学年</label>
            <input type="number" class="form-control" id="inputYear" placeholder="学年">
        </div>
        <div  class="form-group">
            <label for="inputAttendnum">出席番号</label>
            <input type="number" class="form-control" id="inputAttendnum" placeholder="出席番号">
        </div>
        <button type="submit text-center" class="btn btn-primary">登録</button>
    </form>
</div>
    
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
</body>

</html>
