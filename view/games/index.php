<h1>All games</h1>

<a class="my-2 btn btn-custom-blue rounded-0" href="<?=URL?>games/create">Add a new game!</a>

<div class="row col-12 justify-content-center">

    <?php foreach ($games as $result) { ?>
        <div class="col-3 card border-0 img-container m-2 p-0">
            <img class="img-fluid img-game custom-wh-img" src="<?php echo URL ?>img/games/<?php echo $result["img"] ?>" alt="">
            <div class="info-game">
                <h4><?php echo $result["game_name"] ?></h4>
                <a class="p-1 btn btn-custom-blue" href="<?php echo URL ?>games/detail/<?= $result['game_id'] ?>"><i class="fas fa-gamepad"></i></a>
            </div>
        </div>
    <?php } ?>

</div>
