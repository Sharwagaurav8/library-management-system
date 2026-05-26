<h1>Edit Book</h1>

<?= $this->Form->create($book) ?>

<?= $this->Form->control('title', [
    'label' => 'Book Title'
]) ?>

<?= $this->Form->control('author', [
    'label' => 'Author Name'
]) ?>

<?= $this->Form->control('category', [
    'label' => 'Book Category'
]) ?>

<?= $this->Form->control('quantity', [
    'label' => 'Available Quantity'
]) ?>

<?= $this->Form->button('Update Book') ?>

<?= $this->Form->end() ?>