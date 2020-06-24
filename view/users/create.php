<h1>Create a new user</h1>

<form name="create" method="post" action="<?=URL?>users/store">
    <!-- bouw hier je formulier -->
    <label class="col-4" for='full_name'>Full name</label>
    <input class="col-4" type='text' id='full_name' name='full_name' value="<?php echo !empty($error) ? htmlspecialchars($fullname) : "" ?>">

    <label class="col-4" for='email'>E-mail address</label>
    <input class="col-4" type='email' id='email' name='email' value="<?php echo !empty($error) ? htmlspecialchars($email) : "" ?>">

    <label class="col-4" for='phone'>Phone number</label>
    <input class="col-4" type='text' id='phone' name='phone' value="<?php echo !empty($error) ? htmlspecialchars($phone) : "" ?>">

    <label class="col-4" for='age'>Age</label>
    <input class="col-4" type='number' id='age' name='age' value="<?php echo !empty($error) ? htmlspecialchars($age) : "" ?>">

    <input class="col-4 my-2 btn btn-custom-blue rounded-0" type='submit' value='Create user!'>
    <?php if (empty($error)) {
        echo "";
    } else { ?>
        <span class="text-danger"><?php echo $error ?></span>
    <?php } ?>
</form>

