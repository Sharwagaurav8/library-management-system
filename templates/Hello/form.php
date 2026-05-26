<?= $this->Form->create() ?>

<?= $this->Form->control('username', [
    'label' => 'Enter Your Name'
]) ?>

<?= $this->Form->button('Submit') ?>

<?= $this->Form->end() ?>

<?php if (isset($error)): ?>
    <p style="color: red;"><?= $error ?></p>
<?php endif; ?>

<?php if (isset($message)): ?>
    <h3><?= $message ?></h3>
<?php endif; ?>