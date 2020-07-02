<h1>Delete game</h1>
<p>Page: games/delete</p>
<p>Are you sure that you want to delete <?php echo $game["game_name"] ?>?</p>

<a class="my-2 btn btn-custom-red rounded-0" href="<?php echo URL ?>games/destroy/<?php echo $game["game_id"] ?>" onClick="javascript: return confirm('Are you really, really sure?');">Delete!</a>
<a class="my-2 btn btn-custom-blue rounded-0" href="<?php echo URL ?>games/detail/<?php echo $game["game_id"] ?>">Cancel!</a>


