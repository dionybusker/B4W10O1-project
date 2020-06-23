<div class="col-12 p-0">
    <h1>Delete game</h1>
    <p>Page: games/delete</p>
    <p>Are you sure that you want to delete <?php echo $game["game_name"] ?>?</p>
</div>

<div class="col-12 mr-2 p-0">
    <a class="my-2 btn btn-secondary rounded-0" href="<?php echo URL ?>games/index">Cancel!</a>
    <a class="my-2 btn btn-danger rounded-0" href="<?php echo URL ?>games/destroy/<?php echo $game["id"] ?>" onClick="javascript: return confirm('Are you really, really sure?');">Delete!</a>
</div>