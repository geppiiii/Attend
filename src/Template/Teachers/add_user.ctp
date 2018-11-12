<?=$this->Form->create(null,['type'=>'post',['action'=>'addUser']]) ?>
    <?=$this->Form->text('username') ?>
    <?=$this->Form->password('password') ?>
    <?=$this->Form->text('role') ?>
    <?=$this->Form->text('created') ?>
    <?=$this->Form->text('ic_number') ?>
    <?=$this->Form->button('保存') ?>
<?=$this->Form->end() ?>