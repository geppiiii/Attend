<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>出席管理システム</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">


</head>

<body>
    <div class="container mt-md-3">
        <div class="row">
            <div class="col-md-3">
                <h4>名前</h4>
            </div>
            <div class="col-md-3">
                <h4>出席状況</h4>
            </div>
            <div class="col-md-2">
                <h4>開始日</h4>
            </div>
            <div class="col-md-2">
                <h4>終了日</h4>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
    <div class="container-fluid mt-md-3">
        <div class="row">
        <?php foreach($name as $obj):?>
            <div class="col-md-3">
            <?php 
                echo $obj->student_name;
            ?>
            </div>
            <div class="col-md-3 dropdown dropright">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">欠席理由
                    <span class="caret"></span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <a class="dropdown-item">届け出欠席</a>
                    <a class="dropdown-item">公欠</a>
                    <a class="dropdown-item">休学</a>
                    <a class="dropdown-item">謹慎</a>
                    <a class="dropdown-item">出社</a>
                </div>

            </div>
            <div class="col-md-2">
                <input Type="text" class="datepicker_start" name="start">
            </div>
            <div class="col-md-2">
                <input type="text" class="datepicker_end" name="end">
                <!--<div class="form-group" id="datepicker-daterange">
                    <div class="form-inline">
                        <div class="input-daterange input-group" id="datepicker">
                            <input type="text" class="input-sm form-control" name="start" />
                            <span class="input-group-addon">to</span>
                            <input type="text" class="input-sm form-control" name="end" />
                        </div>
                    </div>
                </div>-->
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary" type="submit">保存</button>
            </div>
            <br>
        <?php endforeach;?>
        </div>
    </div>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
$('.datepicker_start').datepicker();
</script>
<script>
$('.datepicker_end').datepicker();
</script>
<script>
    $(function(){
        $('.dropdown-menu .dropdown-item').click(function(){
            var visibleItem = $('.dropdown-toggle', $(this).closest('.dropdown'));
            visibleItem.text($(this).attr('value'));
        });
    });
</script>
<!--<script>
$(function(){
    $('#datepicker-daterange .input-daterange').datepicker({
        language: 'ja',
        format: "yyyy年mm月dd日",
        autoclose: true
    });
});
</script>-->
</body>

</html>
