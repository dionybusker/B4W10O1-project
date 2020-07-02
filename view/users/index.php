<h1>All users</h1>

<a class="my-2 btn btn-custom-blue rounded-0" href="<?=URL?>users/create">Create a new account</a>

<div class="row col-12 justify-content-center">

    <?php foreach ($users as $result) { ?>
        <div class=" card border-0 img-container m-2 p-0">
            <img class="img-fluid img-game custom-wh-img rounded-circle" src="<?php echo URL ?>img/users/<?php echo $result["user_img"] ?>" alt="">
            <div class="info-game">
                <h4><?php echo $result["username"] ?></h4>
                <!-- <a class="p-1 btn btn-custom-blue" href="#"><i class="fas fa-gamepad"></i></a> -->
                <a class="col-5 p-1 btn btn-custom-blue rounded-0" href='<?= URL ?>users/edit/<?= $result['user_id'] ?>'>
                    <i class='fas fa-edit'></i>
                </a>
                <a class='col-5 p-1 btn btn-custom-red rounded-0' href='<?= URL ?>users/delete/<?= $result['user_id'] ?>'>
                    <i class='fas fa-trash-alt'></i>
                </a>
            </div>
        </div>
    <?php } ?>

</div>
