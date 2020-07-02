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
            Description: <?php echo $game["description"] ?> <br><br>
            
            <a class="col-3 p-1 btn btn-custom-blue" href="<?=URL?>games/edit/<?= $game['game_id'] ?>">Edit this game!</a>
            <a class="col-3 p-1 btn btn-custom-red" href="<?=URL?>games/delete/<?= $game['game_id'] ?>">Delete this game!</a>
        </p>
    </div>

    <!-- game media -->
    <div class="col-5 p-0">
        <!-- MAIN IMAGE -->
        <img class="my-2 img-fluid" src="<?php echo URL ?>img/games/<?php echo $game["img"] ?>" alt="">

        <!-- TRAILER/GAMEPLAY -->
        <div class="embed-responsive embed-responsive-16by9">
            <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dushZybUYnM"></iframe> -->
            <iframe class="embed-responsive-item" src="<?php echo $game["link"] ?>"></iframe>
        </div>

        <!-- SLIDESHOW -->
        <div id="slideshow" class="my-2 carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo URL ?>img/slides/<?php echo $game["first_slide"] ?>" alt="first slide">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo URL ?>img/slides/<?php echo $game["second_slide"] ?>" alt="second slide">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo URL ?>img/slides/<?php echo $game["third_slide"] ?>" alt="third slide">
                </div>
            </div>

            <a class="carousel-control-prev" href="#slideshow" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#slideshow" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    

</div>