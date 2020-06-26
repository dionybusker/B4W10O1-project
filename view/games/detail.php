<div class="col-12 row m-0 p-0">

    <!-- game info -->
    <div class="col-7">
        <h1><?php echo $game["game_name"] ?></h1>
        <p>
            Developer: <?php echo $game["developer"] ?> <br>
            Publisher: <?php echo $game["publisher"] ?> <br>
            Release: <?php echo $game["releasedate"] ?> <br><br>
            Platform: <?php echo $game["platform"] ?> <br>
            Genre: <?php echo $game["genre"] ?> <br>
            Spots: <?php echo $game["total_spots"] ?> <br><br>
            Description: <?php echo $game["description"] ?>
        </p>
    </div>

    <!-- game media -->
    <div class="col-5 p-0">
        <!-- image van de game -->
        <img class="img-fluid" src="<?php echo URL ?>img/games/<?php echo $game["img"] ?>" alt="">

        <!-- trailer/gameplay -->
        <!-- <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dushZybUYnM"></iframe>
        </div> -->

        <div>
            <!-- hier komt de slideshow -->
        </div>
    </div>
    

</div>