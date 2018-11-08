<div class="teachers form">
<?= $this->Flash->render() ?>
<?=$this->Form->create("null", [ "type" => "post"]) ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?=$this->Form->text("username") ?>
        <?=$this->Form->password("password") ?>
    </fieldset>
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>
</div>