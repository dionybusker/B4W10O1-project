<h1>Delete tournament</h1>
<p>Page: tournaments/delete</p>
<p>Are you sure that you want to delete tournament #<?php echo $tournaments["tournament_id"] ?>?</p>

<a class="my-2 btn btn-custom-blue rounded-0" href="<?php echo URL ?>tournaments/index">Cancel!</a>
<a class="my-2 btn btn-custom-red rounded-0" href="<?php echo URL ?>tournaments/destroy/<?php echo $tournaments["tournaments_id"] ?>" onClick="javascript: return confirm('Are you really, really sure?');">Delete!</a>

