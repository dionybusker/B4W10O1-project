<h1>Update a tournament's info</h1>

<form name="create" method="post" action="<?=URL?>tournaments/update/<?php echo $tournament["tournament_id"] ?>">

    <label class="col-4" for="game">Game</label>
    <select class="col-4" name="game" id="game">
        <?php foreach ($games as $game) { ?>
            <option value="<?php echo $game["game_id"] ?>"><?php echo $game["game_name"] ?></option>
        <?php } ?>
    </select>

    <label class="col-4" for="user">User</label>
    <select class="col-4" name="user" id="user">
        <?php foreach ($users as $user) { ?>
            <option value="<?php echo $user["user_id"] ?>"><?php echo $user["full_name"] ?></option>
        <?php } ?>
    </select>

    <input class="col-4 my-2 btn btn-custom-blue rounded-0" type='submit' value='Update tournament!'>
</form>