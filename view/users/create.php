<h1>Create a new account</h1>

<form name="create" method="post" action="<?=URL?>users/store">
    <!-- ACCOUNT GEGEVENS -->
    <h5 class="col-12">Account details</h5>
    <label class="col-4" for="username">Gamertag</label>
    <input class="col-4" type="text" id="username" name="username" value="<?php echo !empty($error) ? htmlspecialchars($username) : "" ?>">
    
    <label class="col-4" for="password">Password</label>
    <input class="col-4" type="password" id="password" name="password" value="<?php echo !empty($error) ? htmlspecialchars($password) : "" ?>">

    <label class="col-4" for="passwordRpt">Password repeat</label>
    <input class="col-4" type="password" id="passwordRpt" name="passwordRpt">

    <label class="col-4">Image</label>
    <input class="col-4" type="text" name="img" placeholder="e.g. avatar.jpg" value="<?php echo !empty($error) ? htmlspecialchars($img) : "" ?>">



    <!-- PERSOONLIJKE GEGEVENS -->
    <h5 class="col-12">Personal details</h5>
    <label class="col-4" for='full_name'>Full name</label>
    <input class="col-4" type='text' id='full_name' name='full_name' value="<?php echo !empty($error) ? htmlspecialchars($fullname) : "" ?>">

    <label class="col-4" for='birthday'>Birthday</label>
    <input class="col-4" type='date' id='birthday' name='birthday' value="<?php echo !empty($error) ? htmlspecialchars($birthday) : "" ?>">

    <label class="col-4" for='email'>E-mail address</label>
    <input class="col-4" type='email' id='email' name='email' value="<?php echo !empty($error) ? htmlspecialchars($email) : "" ?>">

    <label class="col-4" for='phone'>Phone number</label>
    <input class="col-4" type='text' id='phone' name='phone' value="<?php echo !empty($error) ? htmlspecialchars($phone) : "" ?>">

    <input class="col-4 my-2 btn btn-custom-blue rounded-0" type='submit' value='Create user!'>
    <?php if (empty($error)) {
        echo "";
    } else { ?>
        <span class="text-danger"><?php echo $error ?></span>
    <?php } ?>
</form>

