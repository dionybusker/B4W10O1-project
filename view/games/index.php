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
	
		
	</div>
    
	<button><a href="<?=URL?>games/create">voeg een game toe</a></button>

</div>