<div>

		<div class="col-12 row">


<?php
foreach($games as $result){ ?>

	<p class="text border col-4"> 
	<img class="w-50 ml- mt-5 mb-5" src="<?php echo URL ?>public/img/<?php echo $result['img'] ?>" alt="<?php echo $result['img'] ?>"> <br>
	
		Naam:<strong><?=$result['game_naam']?></strong>  <br>

		<a href="<?=URL?>games/delete/<?= $result['id']?>">Verwijderen</a>
<a href="<?=URL?>games/update/<?= $result['id']?>">Wijzigen</a>

	
	
	</p>
	

<? } ?>
	
<table class="table">
    <tr>
        <th>game</th>
        <th>developer</th>
        <th>publisher</th>
        <th>genre</th>
        <th> plekken</th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($games as $result) { ?>
        <tr>
            <td><?php echo $result["full_name"] ?></td>
            <td><?php echo $result["age"] ?></td>
            <td><?php echo $result["email"] ?></td>
            <td><?php echo $result["phone"] ?></td>
            <td>
                <a class="p-1 btn btn-secondary" href="#">
                    <i class="fas fa-edit"></i>
                </a>
            </td>
            <td>
                <a class="p-1 btn btn-danger" href="#">
                    <i class="fas fa-trash-alt"></i>
                </a>
            </td>
        </tr>
    <?php } ?>
</table>

	</div>
    
	<button><a href="<?=URL?>games/create">voeg een game toe</a></button>

</div>