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
          <div class="col-md-3"><th>学籍番号</th></div>
          <div class="col-md-3"><th>名前</th></div>
          <div class="col-md-3"><th>遅刻</th></div>
          <div class="col-md-3"><th>欠課</th></div>
        </table>
      </div>

      <!-- 生徒情報を表示 -->
      <?=$this->Form->create($entity,['url'=>['action'=>'lessonconf']]) ?>
      <?php foreach ($student as $obj1): ?>
        <?php foreach($lesson as $obj2): ?>
          <?php if($obj1->student_number == $obj2->student_number): ?>

          <div class="row m-1">
            <!-- 生徒学籍番号 -->
            <div class="col-md-3 text-left">
              <?=$obj2->student_number?>
            </div>
            <!-- 生徒名前 -->
            <div class="col-md-3 text-left">
              <?=$obj1->student_name?>
            </div>
            <!-- 遅刻 -->
            <div class="col-md-3 text-left">
              <?=$obj2->lete?>回
            </div>
            <!-- 欠課 -->
            <div class="col-md-3 text-left">
              <?=$obj2->clerk?>回
            </div>
          </div>
          <hr class="color:GRY">
            <?php endif; ?>
          <?php endforeach; ?>
        <?php endforeach; ?>
        <button class="btn bg-primary" type="submit">戻る</button>
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
