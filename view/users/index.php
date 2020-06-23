<div class="container">
    <h1>Welkom op bij de users</h1>
    <p>Je bent nu in users/index</p>
</div>

<a class="my-2 btn btn-secondary rounded-0" href="<?= URL ?>users/create">Create</a>

<table class="table">
    <tr>
        <th>Full name</th>
        <th>Age</th>
        <th>Email</th>
        <th>Phone</th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($users as $result) { ?>
        <tr>
            <td><?php echo $result["full_name"] ?></td>
            <td><?php echo $result["age"] ?></td>
            <td><?php echo $result["email"] ?></td>
            <td><?php echo $result["phone"] ?></td>
            <td>
                <a class="p-1 btn btn-secondary" href='<?= URL ?>users/edit/<?= $result['id'] ?>'>
                    <i class='fas fa-edit'>Update</i>
                </a>
            </td>
            <td>
                <a class='p-1 btn btn-danger' href='<?= URL ?>users/delete/<?= $result['id'] ?>'>
                    <i class='fas fa-trash-alt'>Delete</i>
                </a>
            </td>
        </tr>
    <?php } ?>
</table>
