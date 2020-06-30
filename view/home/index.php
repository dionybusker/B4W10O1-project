<?php if (!isset($_SESSION["user_id"]) && empty($_SESSION["user_id"])) { ?>

    <h1>Da Vinci eSports</h1>
    <h5>Welcome on the official Da Vinci eSports website!</h5>

    <div class="row col-12">
        <div class="col-6">
            On this website you can either create a new account or just take a look at the games we are hosting during our eSports event. <br>
            If you already have an account, don't hesitate and log in. When you are logged in you can participate in different games during the event.
        </div>

        <!-- log in form -->
        <div class="col-6">
            <form class="col-12" action="<?php echo URL ?>home/login" method="POST">
                <label class="col-5">Gamertag</label>
                <input class="col-5" type="text" name="username">

                <label class="col-5">Password</label>
                <input class="col-5" type="password" name="password">

                <input class="col-5 my-2 btn btn-custom-blue rounded-0" type="submit" name="login" value="Login">
            </form>
        </div>
    </div>

<?php } else { ?>

    <h1>LOGIN SUCCES</h1>

<?php } ?>