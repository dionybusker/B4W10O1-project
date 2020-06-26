<h1>All tournaments in the database</h1>

<a class="my-2 btn btn-custom-blue rounded-0" href="<?= URL ?>tournaments/create">Add a new user!</a>

<table class="table">
    <tr>
        <th>ID</th>
        <th>Game</th>
        <th>Users</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($tournaments as $result) { ?>
        <tr>
            <td><?php echo $result["tournament_id"] ?></td>
            <td><?php echo $result["game_name"] ?></td>
            <td><?php echo $result["full_name"] ?></td>
            <td>
                <a class="p-1 btn btn-custom-blue" href='#'>
                    <i class="fas fa-user-alt"></i>
                </a>
            </td>
            <td>
                <a class="p-1 btn btn-secondary" href='<?= URL ?>tournaments/edit/<?= $result['tournaments_id'] ?>'>
                    <i class='fas fa-edit'></i>
                </a>
            </td>
            <td>
                <a class='p-1 btn btn-custom-red' href='<?= URL ?>tournaments/delete/<?= $result['tournaments_id'] ?>'>
                    <i class='fas fa-trash-alt'></i>
                </a>
            </td>
        </tr>
    <?php } ?>
</table>
