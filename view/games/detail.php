<div class="col-12 row">



	
<table class="table">
    <tr>
		<th></th>
        <th>Game</th>
        <th>description</th>
        <th>Developer</th>
        <th>Publisher</th>
      
        <th>Genre</th>
        <th>Platform</th>
        <th>Plekken</th>
        <th>Release</th>
        <th></th> <!-- detail page -->
        <th></th> <!-- edit page -->
        <th></th> <!-- delete page -->
    </tr>
    
        <tr>
			<td>
				<a href="#">
					
				</a>
			</td>
            <td><?php echo $game["game_name"] ?></td>
            <td><?php echo $game["description"] ?></td>
            <td><?php echo $game["developer"] ?></td>
            <td><?php echo $game["publisher"] ?></td>
            <td><?php echo $game["genre"] ?></td>
            <td><?php echo $game["platform"] ?></td>
            <td><?php echo $game["total_spots"] ?></td>
            <img class="img-fluid" src="<?php echo URL ?>img/games/<?php echo $game["img"] ?>" alt="">
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