<a class="my-2 btn btn-custom-blue rounded-0" href="<?=URL?>games/create">voeg een game toe</a>

<div class="col-12 row">

    <table class="table">
        <tr>
            <th></th>
            <th>Game</th>
        
            <th>Plekken</th>
            <th></th> <!-- detail page -->
            <th></th> <!-- edit page -->
            <th></th> <!-- delete page -->
        </tr>
        <?php foreach ($games as $result) { ?>
            <tr>
                <td>
                    <a href="#">
                        <img class="img-fluid" src="<?php echo URL ?>img/games/<?php echo $result["img"] ?>" alt="">
                    </a>
                </td>
                <td><?php echo $result["game_name"] ?></td>
               
           
                <td><?php echo $result["total_spots"] ?></td>
                <td>
                    <a class="p-1 btn btn-custom-blue" href="<?php echo URL ?>games/detail/<?= $result['id'] ?>">
                        <i class="fas fa-gamepad"></i>
                    </a>
                </td>
                <td>
                
                </td>
            </tr>
        <?php } ?>
    </table>

</div>
