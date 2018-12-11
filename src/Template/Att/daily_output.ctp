<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>出席管理システム</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <div class="container m-3">
        <fieldset>
            <div class="container">
                <legend>遅刻者</legend>
                <?php foreach($att_late as $obj):?>
                <?php foreach($name as $obj2):?>
                <?php if(strcmp($obj->student_number,$obj2->student_number) == 0){
                    echo $obj2->student_name;
                }
                ?>
                <?php endforeach;?>
                <br>
                <?php endforeach;?>
            </div>
        </fieldset>
    </div>
    <div class="container m-3">
        <fieldset>
            <div class="container">
                <legend>欠席者</legend>
                <?php foreach($abs as $obj):?>
                <?php foreach($name as $obj2):?>
                <?php if(strcmp($obj->student_number,$obj2->student_number) == 0){
                    echo $obj2->student_name;
                }
                ?>
                <?php endforeach;?>
                <br>
                <?php endforeach;?>
            </div>
        </fieldset>
    </div>

    <div class="container m-3">
        <fieldset>
            <div class="container">
                <legend>出席率警告者</legend>
                <?php foreach($rate as $value):?>
                    <div class="row m-1">
                        <div class="col-md-2">
                            <?php
                                echo $value['name'];
                            ?>
                        </div>
                        <div class="col-md-2">
                            <?php
                                $a = ($value['ritu'] * 100)."%";
                                echo $a;
                            ?>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </fieldset>
    </div>

    <div class="container m-3">
        <!-- Dsave -->
        <?=$this->Form->create(null,['url'=>['action'=>'dailyreport']]) ?>
            <?=$this->Form->button("日報ファイルのダウンロード",["class" => "daily"]) ?>
        <?=$this->Form->end() ?>
    </div>
    <div class="container m-3">
        <!-- Msave -->
        <?=$this->Form->create(null,['url'=>['action'=>'monthlyreport']]) ?>
            <?=$this->Form->button("月報ファイルのダウンロード",["class" => "monthly"]) ?>
        <?=$this->Form->end() ?>
    </div>
    <!-- .xlsx -->
<script>
	$('.daily').click(function(){
		if(!confirm('本日の出欠を締め切ります大丈夫ですか？')){
			/* キャンセルの時の処理 */
			return false;
		}
	});
  $('.monthly').click(function(){
		if(!confirm('現在作成中ですので完成をお待ちください')){
			/* キャンセルの時の処理 */
			return false;
		}else{
      return false;
    }
	});
</script>
</body>

</html>
