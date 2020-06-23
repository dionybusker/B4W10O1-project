<h1>Persoon wijzigen</h1>
<form name="update" method="post" action="<?=URL?>users/update/<?php echo $users['id'] ?>">
    <!--  Bouw hier de rest van je formulier   -->
    <label class="col-4" for='full_name'>Uw naam : </label>
    <input class="col-4" type='text' id='full_name' name='full_name' value='<?= $users['full_name'] ?>'>

    <label class="col-4" for='email'>Uw email : </label>
    <input class="col-4" type='email' id='email' name='email' value='<?= $users['email'] ?>'>

    <label class="col-4" for='phone'>Uw telefoon nummer : </label>
    <input class="col-4" type='text' id='phone' name='phone' value='<?= $users['phone'] ?>'>

    <label class="col-4" for='age'>Uw leeftijd : </label>
    <input class="col-4" type='text' id='age' name='age' value='<?= $users['age'] ?>'>

    <input class="col-4 my-2 btn btn-custom-blue rounded-0" type='submit' value='Update'>
</form>

