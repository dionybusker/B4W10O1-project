<?php //print_r($_SESSION); ?>
<?php if (!empty($_SESSION["username"]) && $_SESSION["loggedin"] == true) { ?>
    <h1>Da Vinci eSports</h1>
    <h5>Welcome <?php $_SESSION["username"] ?>, on the official Da Vinci eSports website!</h5>

    <div class="row col-12">
        <p>
            On this website you can either create a new account or just take a look at the games we are hosting during our eSports event. <br>
            If you already have an account, don't hesitate and log in. When you are logged in you can participate in different games during the event.
        </p>
    </div>
<?php } else { ?>
    <h1>Da Vinci eSports</h1>
    <h5>Welcome on the official Da Vinci eSports website!</h5>

    <div class="row col-12">
        <p>
            On this website you can either create a new account or just take a look at the games we are hosting during our eSports event. <br>
            If you already have an account, don't hesitate and log in. When you are logged in you can participate in different games during the event.
        </p>
    </div>
<?php } ?>