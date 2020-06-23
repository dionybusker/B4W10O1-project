<h1>Persoon wijzigen</h1>
	<form name="update" method="post" action="<?=URL?>users/update/<?php echo $users['id'] ?>">
	    <!-- <input type="hidden" name="id" value="<?=$users['id'] ?>"/> -->
	    <!--  Bouw hier de rest van je formulier   -->
        <label for='full_name'>Uw naam : </label><input type='text' id='full_name' name='full_name' value='<?= $users['full_name'] ?>'>
		<label for='email'>Uw email : </label><input type='email' id='email' name='email' value='<?= $users['email'] ?>'>
		<label for='phone'>Uw telefoon nummer : </label><input type='text' id='phone' name='phone' value='<?= $users['phone'] ?>'>
		<label for='age'>Uw leeftijd : </label><input type='text' id='age' name='age' value='<?= $users['age'] ?>'>
		<input type='submit' value='Update'>
	</form>