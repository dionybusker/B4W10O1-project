<div class="col-12 p-0">
    <h1>voeg een game toe</h1>
</div>

<form method="post" action="store">
    <!-- bouw hier je formulier -->
    <label class="col-4">Game title</label>
    <input class="col-4" type="text" name="game_name">

    <label class="col-4">Image</label>
    <input class="col-4" type="text" name="img">
   
    <label class="col-4">Developer</label>
    <input class="col-4" type="text" name="developer">

    <label class="col-4">Publisher</label>
    <input class="col-4" type="text" name="publisher">

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
    <input class="col-4" type="text" name="total_spots">

    <label class="col-4">Description</label>
    <textarea class="col-4" type="text" name="description"></textarea>

    <input class="col-4 my-2 btn btn-secondary rounded-0" type="submit" name="create">
</form>

