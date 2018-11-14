<div class="teachers form">
<?= $this->Form->create($teacher) ?>
    <fieldset>
        <legend><?= __('Add Teacher') ?></legend>
        先生の名前
        <?= $this->Form->text('username') ?>
        パス
        <?= $this->Form->password('password') ?>
        Icカード
        <?= $this->Form->text('ic_number') ?>
        <input type='hidden' name='role' value='admin' >

   </fieldset>
<?= $this->Form->button(__('Submit')); ?>
<?=$this->Html->link('ログイン画面に戻る', '/teachers/login',['class' => 'link']);?>
<?= $this->Form->end() ?>
</div>
