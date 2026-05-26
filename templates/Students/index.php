<h1>All Students</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Class</th>
        <th>Roll Number</th>
    </tr>

    <?php foreach ($students as $student): ?>
    <tr>
        <td><?= $student->id ?></td>
        <td><?= $student->name ?></td>
        <td><?= $student->email ?></td>
        <td><?= $student->class ?></td>
        <td><?= $student->roll_no ?></td>
    </tr>
    <?php endforeach; ?>

</table>