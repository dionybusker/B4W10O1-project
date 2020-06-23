<div class="col-12 p-0">
    <h1>Delete users?</h1>
    <p>Page: users/delete</p>
    <p>Are you sure that you want to delete <?php echo $users["full_name"] ?>?</p>
</div>

<div class="col-12 mr-2 p-0">
    <a class="my-2 btn btn-secondary rounded-0" href="<?php echo URL ?>users/index">Cancel!</a>
    <a class="my-2 btn btn-danger rounded-0" href="<?php echo URL ?>users/destroy/<?php echo $users["id"] ?>" onClick="javascript: return confirm('Are you really, really sure?');">Delete!</a>
</div>