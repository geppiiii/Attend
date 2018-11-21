<html long="ja">
  <!-- head -->
  <head>
    <meta http-equiv="content-yape" content="text/html; charset=UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <!-- body -->
  <body>
    <div class="container" style="margin-top:3%">
      <!-- カラム名 -->
      <div clas="row">
        <table>
          <div class="col-md-4"><th>学籍番号</th></div>
          <div class="col-md-4"><th>名前</th></div>
          <div class="col-md-4"><th>授業状態</th></div>
        </table>
      </div>

      <!-- 生徒情報を表示 -->
      <?=$this->Form->create($entity,['url'=>['action'=>'editRecord']]) ?>
        <?php foreach ($student as $obj): ?>
          <div class="row m-1">
            <!-- 生徒学籍番号 -->
            <div class="col-md-4 text-left">
              <?=$obj->student_number?>
            </div>
            <!-- 生徒名前 -->
            <div class="col-md-4 text-left">
              <?=$obj->student_name?>
            </div>
            <!-- 授業状態 -->
            <div class="col-md-2 text-left">
              <input type="radio" name= <?=$obj->student_number?> value='1'>遅刻
            </div>
            <div class="col-md-2 text-left">
              <input type="radio" name= <?=$obj->student_number?> value='2'>欠課
              <input type="radio" name= <?=$obj->student_number?> value="" checked="checked" style="display:none;" />
            </div>
          </div>
          <hr class="color:GRY">
        <?php endforeach; ?>
        <button class="btn bg-primary" type="submit">確定</button>
        <?=$this->Form->end() ?>
      </div>
    </div>
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
  </body>
</html>
