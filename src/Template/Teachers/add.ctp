<div class="teachers form">
<?= $this->Form->create($teacher) ?>
    <fieldset>
        <legend><?= __('Add Teacher') ?></legend>
        <?= $this->Form->control('username') ?>
        <?= $this->Form->control('password') ?>
        <!-- <?= $this->Form->control('role', [
            'options' => ['admin' => 'Admin', 'author' => 'Author']
        ]) ?> -->
   </fieldset>
<?= $this->Form->button(__('Submit')); ?>
<?=$this->Html->link('ログイン画面に戻る', '/teachers/login',['class' => 'link']);?>
<?= $this->Form->end() ?>
</div>