<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>出席管理システム</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

<div class="container text-center"><h2>生徒登録</h2></div>
<div class="container">
    <?=$this->Form->create(null,
        ['type'=>'post','url'=>['controller'=>'Att','action'=>'registryStudent']]) ?>
        <?=$this -> Form -> hidden ( "sid", [ "value" => $this->request->query('sid') ] );?>
        <?=$this -> Form -> hidden ( "inputNum", [ "value" => $this->request->query('snumber') ] );?>
        <div class="input text"><label for="textbox">学籍番号</label><p><?=$this->request->query('snumber')?></p></div>
        <div class="input text"><label for="textbox">名前</label><input type="text" name="inputName" size="20" id="inputName" /></div>
        <div class="input text"><label for="textbox">学科</label><input type="text" name="inputClass" size="20" id="inputClass" /></div>
        <div class="input text"><label for="textbox">クラス</label><input type="text" name="inputClassA" size="20" id="inputClassA" /></div>
        <div class="input text"><label for="textbox">学年</label><input type="text" name="inputYear" size="20" id="inputYear" /></div>
        <div class="input text"><label for="textbox">出席番号</label><input type="text" name="inputAttendnum" size="20" id="inputAttendnum" /></div>

        <?=$this -> Form -> submit ( "登録");?>
    <?=$this->Form->end(); ?>
        
</div>
    
<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
</body>

</html>
