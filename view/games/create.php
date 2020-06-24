<h1>Create a new game</h1>

<form name="create" method="post" action="store">
    <!-- bouw hier je formulier -->
    <label class="col-4">Game title</label>
    <input class="col-4" type="text" name="game_name" value="<?php echo !empty($error) ? htmlspecialchars($gamename) : "" ?>">

    <label class="col-4">Image</label>
    <input class="col-4" type="text" name="img" placeholder="e.g. game.png" value="<?php echo !empty($error) ? htmlspecialchars($img) : "" ?>">

    <label class="col-4">Developer</label>
    <input class="col-4" type="text" name="developer" value="<?php echo !empty($error) ? htmlspecialchars($developer) : "" ?>">

    <label class="col-4">Publisher</label>
    <input class="col-4" type="text" name="publisher" value="<?php echo !empty($error) ? htmlspecialchars($publisher) : "" ?>">

    
    <label class="col-4">Release</label>
    <input class="col-4" type="text" name="releasedate" value="<?php echo !empty($error) ? htmlspecialchars($releasedate) : "" ?>">

    <label class="col-4" for="genre">Genre</label>
    <select class="col-4" name="genre" id="genre">
        <?php foreach ($genres as $genre) { ?>
            <option value="<?php echo $genre["genre_id"] ?>"><?php echo $genre["genre"] ?></option>
        <?php } ?>
    </select>

    <label class="col-4" for="platform">Platform</label>
    <select class="col-4" name="platform" id="platform">
        <?php foreach ($platforms as $platform) { ?>
            <option value="<?php echo $platform["platform_id"] ?>"><?php echo $platform["platform"] ?></option>
        <?php } ?>
    </select>

    <label class="col-4">How many spots</label>
    <input class="col-4" type="text" name="total_spots" value="<?php echo !empty($error) ? htmlspecialchars($totalspots) : "" ?>">

    <label class="col-4">Description</label>
    <textarea class="col-4" type="text" name="description"><?php echo !empty($error) ? htmlspecialchars($description) : "" ?></textarea>

    <input class="col-4 my-2 btn btn-custom-blue rounded-0" type="submit" name="create" value="Create game!">
    <?php if (empty($error)) {
        echo "";
    } else { ?>
        <span class="text-danger"><?php echo $error ?></span>
    <?php } ?>
</form>

