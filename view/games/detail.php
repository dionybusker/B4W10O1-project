<div class="col-12 row justify-content-center">

    <!-- game info -->
    <div class="col-7 bg-danger">
        <p>
            Game: <?php echo $game["game_name"] ?> <br>
            Description: <?php echo $game["description"] ?> <br>
            Developer: <?php echo $game["developer"] ?> <br>
            Publisher: <?php echo $game["publisher"] ?> <br>
            Release: <?php echo $game["releasedate"] ?> <br>
            Genre: <?php echo $game["genre"] ?> <br>
            Platform: <?php echo $game["platform"] ?> <br>
            Spots: <?php echo $game["total_spots"] ?>
        </p>
    </div>

    <!-- game media -->
    <div class="col-5 bg-warning">
        <img class="img-fluid" src="<?php echo URL ?>img/games/<?php echo $game["img"] ?>" alt="">

    </div>
    

</div>