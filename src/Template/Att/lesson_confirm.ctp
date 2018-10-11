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
            <li class="nav-item active">
                <a class="nav-link" href="#">授業中確認画面</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="daily-output.html">日報出力画面</a>
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
    
    <div class="container text-center" style="margin-top:15%">
        <form action="" method="post">
            <table>
                <tr>
                    <th>学籍番号</th>
                    <th>名前</th>
                    <td>
                        <input type="checkbox" name="judge" value="1">遅刻
                        <input type="checkbox" name="judge" value="2">欠課
                    </td>
                </tr>
                <tr><td><button class="btn bg-primary" type="submit">確定</button></tr>
            </table>
        </form>
    </div>
    
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
</body>

</html>
