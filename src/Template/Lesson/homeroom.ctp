<!DOGTYPE html>
<html long="ja">
<head>
  <meta http-equiv="content-yape" content="text/html; charset=UTF-8">
</head>
  <title>
    ホームルーム画面
  </title>

  <body>
    <h1>ホームルーム画面</h1>

    <?php foreach ($attend as $obj): ?>
      番号<?=$obj->student_number?>
      <select name="example" >
        <option value="サンプル1">名札忘れ</option>
        <option value="サンプル2">遅刻</option>
        <option value="サンプル3">遅延</option>
      </select>
    <?php endforeach; ?>

    本日の授業時間数
    <select name="start" >
      <option value="lesson1" selected>1限</option>
      <option value="lesson2">2限</option>
      <option value="lesson3">3限</option>
      <option value="lesson4">4限</option>
    </select>
    から
    <select name="end" >
      <option value="lesson1">1限</option>
      <option value="lesson2">2限</option>
      <option value="lesson3">3限</option>
      <option value="lesson4" selected>4限</option>
    </select>
    <button>送信</button>

  </body>
