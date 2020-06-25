<h1>All users in the database</h1>

<a class="my-2 btn btn-custom-blue rounded-0" href="<?= URL ?>users/create">Add a new user!</a>

<table class="table">
    <tr>
        <th>Full name</th>
        <th>Age</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    <?php foreach ($users as $result) { ?>
        <tr>
            <td><?php echo $result["full_name"] ?></td>
            <td><?php echo $result["age"] ?></td>
            <td><?php echo $result["email"] ?></td>
            <td><?php echo $result["phone"] ?></td>
            <td>
                <a class="p-1 btn btn-custom-blue" href='<?= URL ?>users/detail/<?= $result['user_id'] ?>'>
                    <i class="fas fa-user-alt"></i>
                </a>
            </td>
            <td>
                <a class="p-1 btn btn-secondary" href='<?= URL ?>users/edit/<?= $result['user_id'] ?>'>
                    <i class='fas fa-edit'></i>
                </a>
            </td>
            <td>
                <a class='p-1 btn btn-custom-red' href='<?= URL ?>users/delete/<?= $result['user_id'] ?>'>
                    <i class='fas fa-trash-alt'></i>
                </a>
            </td>
        </tr>
    <?php } ?>
</table>
