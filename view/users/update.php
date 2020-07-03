<h1>Update a user's info</h1>
<form name="update" method="post" action="<?=URL?>users/update/<?php echo $users['user_id'] ?>">
    <!--  Bouw hier de rest van je formulier   -->
    <label class="col-4" for='full_name'>Full name</label>
    <input class="col-4" type='text' id='full_name' name='full_name' value='<?= $users['full_name'] ?>'>

    <label class="col-4" for='email'>E-mail address</label>
    <input class="col-4" type='email' id='email' name='email' value='<?= $users['email'] ?>'>

    <label class="col-4" for='phone'>Phone number</label>
    <input class="col-4" type='text' id='phone' name='phone' value='<?= $users['phone'] ?>'>

    <label class="col-4" for='birthday'>Birthday</label>
    <input class="col-4" type='date' id='birthday' name='birthday' value='<?= $users['birthday'] ?>'>

    <input class="col-4 my-2 btn btn-custom-blue rounded-0" type='submit' value='Update!'>
</form>

