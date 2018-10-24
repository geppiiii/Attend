<div class="teachers form">
<?= $this->Flash->render() ?>
<?=$this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?=$this->Form->text("username",['placeholder'=>'username']) ?>
        <?=$this->Form->password("password",['placeholder'=>'password']) ?>
    </fieldset>
<?= $this->Form->button(__('Login')); ?>
<?=$this->Html->link('新規登録', '/Teachers/add',['class' => 'link']);?>
<?= $this->Form->end() ?>
</div>