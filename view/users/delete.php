<h1>Delete user</h1>
<p>Page: users/delete</p>
<p>Are you sure that you want to delete <?php echo $users["full_name"] ?>?</p>

<a class="my-2 btn btn-custom-red rounded-0" href="<?php echo URL ?>users/destroy/<?php echo $users["user_id"] ?>" onClick="javascript: return confirm('Are you really, really sure?');">Delete!</a>
<a class="my-2 btn btn-custom-blue rounded-0" href="<?php echo URL ?>users/index">Cancel!</a>


