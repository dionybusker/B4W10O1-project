<div class="col-12 row">



	
<table class="table">

    
        <tr>
			<td>
				<a href="#">
					
				</a>
			</td>
            <img class="img-fluid" src="<?php echo URL ?>img/games/<?php echo $game["img"] ?>" alt="">
            <td>Game: <?php echo $game["game_name"] ?></td>
            <td>Description: <?php echo $game["description"] ?></td>
            <td>Developer: <?php echo $game["developer"] ?></td>
            <td>Publisher: <?php echo $game["publisher"] ?></td>
            <td>Release: <?php echo $game["releasedate"] ?></td>
            <td>Genre: <?php echo $game["genre"] ?></td>
            <td>Platform: <?php echo $game["platform"] ?></td>
            <td>Spots: <?php echo $game["total_spots"] ?></td>
     
            <td>

            </td>
            <td>
                <a class="p-1 btn btn-secondary" href="<?=URL?>games/edit/<?= $game['game_id'] ?>">
                    <i class="fas fa-edit"></i>
                </a>
            </td>
            <td>
                <a class="p-1 btn btn-danger" href="<?=URL?>games/delete/<?= $game['game_id'] ?>">
                    <i class="fas fa-trash-alt"></i>
                </a>
            </td>
        </tr>
    
</table>

	</div>
    

</div>