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
    <?php foreach ($lesson as $obj): ?>
      番号<?=$obj->student_number?>
      遅刻<?=$obj->lete?>
      欠課<?=$obj->clerk?><br>
    <?php endforeach; ?>
  </body>
