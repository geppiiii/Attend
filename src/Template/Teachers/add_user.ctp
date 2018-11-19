<?=$this->Form->create(null,['type'=>'post',['action'=>'addUser']]) ?>
<h3>教師登録</h3>
  ユーザー名
    <?=$this->Form->text('username') ?>
  パスワード
    <?=$this->Form->password('password') ?>
  <!--役割
    <?=$this->Form->text('role') ?>
  制作美
    <?=$this->Form->text('created') ?>-->
  カード番号
    <?=$this->Form->text('ic_number') ?>
    <?=$this->Form->button('保存') ?>
<?=$this->Form->end() ?>
