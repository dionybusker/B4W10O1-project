<h1>Persoon wijzigen</h1>
<form name="update" method="post" action="<?php echo URL ?>games/update/<?php echo $game["game_id"] ?>">
    <!-- bouw hier je formulier -->
    <label class="col-4">Game title</label>
    <input class="col-4" type="text" name="game_name" value="<?php echo $game["game_name"] ?>">

    <label class="col-4">Image</label>
    <input class="col-4" type="text" name="img" value="<?php echo $game["img"] ?>">

    <label class="col-4">Developer</label>
    <input class="col-4" type="text" name="developer" value="<?php echo $game["developer"] ?>">

    <label class="col-4">Publisher</label>
    <input class="col-4" type="text" name="publisher" value="<?php echo $game["publisher"] ?>">

    <label class="col-4" for="genre">Genre</label>
    <select class="col-4" name="genre" id="genre">
        <?php foreach ($genres as $genre) { ?>
            <option value="<?php echo $genre["genre_id"] ?>" <?php if ($genre["genre_id"] == $game["genre_id"]) { echo "selected"; } ?>><?php echo $genre["genre"] ?></option>
        <?php } ?>
    </select>

    <label class="col-4" for="platform">Platform</label>
    <select class="col-4" name="platform" id="platform">
        <?php foreach ($platforms as $platform) { ?>
            <option value="<?php echo $platform["platform_id"] ?>" <?php if ($platform["platform_id"] == $game["platform_id"]) { echo "selected"; } ?>><?php echo $platform["platform"] ?></option>
        <?php } ?>
    </select>

    <label class="col-4">How many spots</label>
    <input class="col-4" type="text" name="total_spots" value="<?php echo $game["total_spots"] ?>">

    <label class="col-4">Description</label>
    <textarea class="col-4" type="text" name="description"><?php echo $game["description"] ?></textarea>

    <input class="col-4 my-2 btn btn-custom-blue rounded-0" type="submit" name="update" value="update">
</form>

