<h1>All Books</h1>

<?= $this->Html->link(
    'Add New Book',
    ['action' => 'add']
) ?>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Category</th>
        <th>Quantity</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($books as $book): ?>
    <tr>
        <td><?= $book->id ?></td>
        <td><?= $book->title ?></td>
        <td><?= $book->author ?></td>
        <td><?= $book->category ?></td>
        <td><?= $book->quantity ?></td>
        <td>

            <?= $this->Html->link(
                'Edit',
                ['action' => 'edit', $book->id]
            ) ?>

            |

            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $book->id],
                [
                    'confirm' => 'Are you sure you want to delete this book?'
                ]
            ) ?>

        </td>
    </tr>
    <?php endforeach; ?>

</table>