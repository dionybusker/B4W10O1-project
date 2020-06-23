<div class="col-12 row">



	
<table class="table">
    <tr>
		<th></th>
        <th>Game</th>
        <th>Developer</th>
        <th>Publisher</th>
        <th>Genre</th>
        <th>Platform</th>
        <th>Plekken</th>
        <th></th> <!-- detail page -->
        <th></th> <!-- edit page -->
        <th></th> <!-- delete page -->
    </tr>
    <?php foreach ($game as $result) { ?>
        <tr>
			<td>
				<a href="#">
					<img class="img-fluid" src="<?php echo URL ?>img/<?php echo $result["img"] ?>" alt="">
				</a>
			</td>
            <td><?php echo $result["game_name"] ?></td>
            <td><?php echo $result["developer"] ?></td>
            <td><?php echo $result["publisher"] ?></td>
            <td><?php echo $result["genre"] ?></td>
            <td><?php echo $result["platform"] ?></td>
            <td><?php echo $result["total_spots"] ?></td>
            <td>
              
            </td>
            <td>
                <a class="p-1 btn btn-secondary" href="<?=URL?>games/edit/<?= $result['id'] ?>">
                    <i class="fas fa-edit"></i>
                </a>
            </td>
            <td>
                <a class="p-1 btn btn-danger" href="<?=URL?>games/delete/<?= $result['id'] ?>">
                    <i class="fas fa-trash-alt"></i>
                </a>
            </td>
        </tr>
    <?php } ?>
</table>

	</div>
    

</div>