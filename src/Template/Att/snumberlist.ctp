<title>出席番号リスト</title>
<body>
<?php foreach($s_list as $obj): ?>
  <?=$this -> Form -> create (
                "null", [ "type" => "get",
                          "url" => ["action" => "registry_student"]]) ?>
  <p><?=$obj->student_number ?></p>
  <?=$this -> Form -> hidden ( "sid", [ "value" => $obj->id ] );?>
  <?=$this -> Form -> hidden ( "snumber", [ "value" => $obj->student_number ] );?>
  <?=$this->Form->button('登録') ?>
  <?=$this -> Form -> end ()?>
<?php endforeach;?>
</body>

