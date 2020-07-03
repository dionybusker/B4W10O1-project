<h1>Sign in!</h1>

<!-- log in form -->
<form class="col-6" action="<?php echo URL ?>login/login" method="POST">
    <label class="col-5">Username</label>
    <input class="col-5" type="text" name="username">

    <label class="col-5">Password</label>
    <input class="col-5" type="password" name="password">

    <input class="col-5 my-2 btn btn-custom-blue rounded-0" type="submit" name="login" value="Login">
</form>

<p>Don't have an account yet? Sign up <a href="<?php echo URL ?>users/create">here</a>!</p>



