<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>出席管理システム</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-md-3">
        <div class="row">
            <div class="col-md-4">
                <h4>遅刻者</h4>
            </div>
            <div class="col-md-8">
                <?php foreach($att_late as $obj):?>
                <?= $obj->student_number?>
                <?php foreach($name as $obj2):?>
                <?php if(strcmp($obj->student_number,$obj2->student_number) == 0){
                    echo $obj2->student_name;
                }
                ?>
                <?php endforeach;?>
                <br>
                <?php endforeach;?>
            </div>
        </div>
    </div>
    <div class="container mt-md-3">
        <div class="row">
            <div class="col-md-4">
                <h4>欠席者</h4>
            </div>
            <div class="col-md-8">
                <?php foreach($abs as $obj):?>
                <?= $obj->student_number?>
                <?php foreach($name as $obj2):?>
                <?php if(strcmp($obj->student_number,$obj2->student_number) == 0){
                    echo $obj2->student_name;
                }
                ?>
                <?php endforeach;?>
                <br>
                <?php endforeach;?>
            </div>
        </div>
        <form action="save">
            <button type="submit">エクセルファイルのダウンロード</button>
        </form>
    </div>
    <!-- .xlsx -->
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
</body>

</html>
