<!DOGTYPE html>
<html long="ja">
<head>
  <meta http-equiv="content-yape" content="text/html; charset=UTF-8">
</head>
  <title>
    授業中画面
  </title>

  <body>
    <h1>授業中画面</h1>
    学籍番号
    名前<br>
    <!-- 生徒情報を表示 -->
    <?=$this->Form->create($entity,['url'=>['action'=>'editRecord']]) ?>
    <?php foreach ($student as $obj): ?>
      <?=$obj->student_number?>
      <?=$obj->student_name?>
      <input type="checkbox" name='tikoku[]' value=<?=$obj->student_number?>>遅刻
      <input type="checkbox" name='kekka[]' value=<?=$obj->student_number?>>欠課
      <br>
    <?php endforeach; ?>
    <?=$this->Form->button("送信") ?>
    <?=$this->Form->end() ?>
  </body>
