<html long="ja">
  <head>
    <meta http-equiv="content-yape" content="text/html; charset=UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
  </head>
  <body>
  <!-- 出席以外の表示 -->
  <?=$this->Form->create('null',['url' => ['action' => 'momingdbCreate']]) ?>
    <?=$this->Form->button('本日登校日') ?>
  <?=$this->Form->end(); ?>
  <?=$this->Form->create($entity,['url'=>['action'=>'updaterecord']]) ?>
    <div class="container-fluid" style="margin-top:3%">
      <!-- カラム名 -->
      <div clas=" row">
        <table>
          <div class="col-md-4"><th>学籍番号</th></div>
          <div class="col-md-4"><th>名前</th></div>
          <div class="col-md-4"><th>出席状態</th></div>
        </table>
      </div>
      <!-- カラム値 -->
      <?php foreach ($student as $obj1): ?>
        <?php foreach($attend as $obj2): ?>
          <?php if($obj1->student_number == $obj2->student_number): ?>
            <div class="row m-1">
              <!-- 生徒学籍番号 -->
              <div class="col-md-4">
                <?=$obj2->student_number?>
                <input type="hidden" name='aaa[]' value=<?=$obj2->student_number?>>
              </div>
              <!-- 生徒名前 -->
              <div class="col-md-4">
                <?=$obj1->student_name?>
              </div>
              <!-- 出席状態 -->
              <div class="form-row align-items-center">
                <div class="col-auto my-1">
                  <select class="custom-select " id="inlineFormCustomSelect" name="conf[]">
                    <option selected value="2">遅刻</option>
                    <option value="4">遅延</option>
                    <option value="1">名札忘れ</option>
                  </select>
                </div>
              </div>
            </div>
            <hr class="GRAY">
          <?php endif; ?>
        <?php endforeach; ?>
      <?php endforeach; ?>
      <button class="btn bg-primary" type="submit">登録</button>
      <?=$this->Form->end(); ?>
      <input type="button" class="btn bg-primary" style="color:white;" value="更新" onclick="window.location.reload();" />
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous">
    </script>
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
