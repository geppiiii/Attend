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
            <li class="nav-item active">
                <a class="nav-link" href="#">HR確認画面</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lesson_confirm.html">授業中確認画面</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="daily_output.html">日報出力画面</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="monthly-output.html">月報出力画面</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="registry-student.html">生徒登録画面</a>
            </li>
            <li class="nav-item mr-md-0">
                <a class="nav-link" href="index.html">ログアウト</a>   
            </li>
            </ul>
            
        </div>
    </nav>
    
    <div class="container mt-md-3">
        <div class="container">
            <h4>遅刻者一覧</h4>
            <div class="row">
                <div class="col-md-6">
                    <p>名前</p>
                </div>
                <div class="col-md-6 dropdown dropright">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">出席状況
                    <span class="caret"></span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item" value="遅刻">遅刻</a>
                        <a class="dropdown-item" value="遅延">遅延</a>
                        <a class="dropdown-item" value="公欠">公欠</a>
                        <a class="dropdown-item" value="名札忘れ">名札忘れ</a>
                        <a class="dropdown-item" value="届け出欠席">届け出欠席</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h4>本日の授業時間</h4>
            <div class="row">
            <div class="col-md-5 dropdown dropright">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">１限
                    <span class="caret"></span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <a class="dropdown-item" value="１限">１限</a>
                    <a class="dropdown-item" value="２限">２限</a>
                    <a class="dropdown-item" value="３限">３限</a>
                    <a class="dropdown-item" value="４限">４限</a>
                </div>
            </div>
            <div class="col-md-2 container"><p>から</p></div>
            <div class="col-md-5 dropdown dropright">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">３限
                    <span class="caret"></span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <a class="dropdown-item" value="１限">１限</a>
                    <a class="dropdown-item" value="２限">２限</a>
                    <a class="dropdown-item" value="３限">３限</a>
                    <a class="dropdown-item" value="４限">４限</a>
                </div>
            </div>
            </div>
            <button type="submit text-center" class="btn btn-primary">確定</button>
        </div>
    </div>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
<script>
    $(function(){
        $('.dropdown-menu .dropdown-item').click(function(){
            var visibleItem = $('.dropdown-toggle', $(this).closest('.dropdown'));
            visibleItem.text($(this).attr('value'));
        });
    });
</script>
</body>

</html>
