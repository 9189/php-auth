<?php session_start() ?>
<?php require "header.php" ?>

<div>
    <form class="col-3 mx-auto my-5 form-signin w-25" action="../includes/login.inc.php" method="post">
        <div class="text-center mb-5">
            <h1 class="h3 mb-3 font-weight-normal">Login</h1>
        </div>
        <input type="username" name="uid" class="form-control my-4" placeholder="Username / E-mail" required>
        <input type="password" name="pwd" class="form-control my-4" placeholder="Password" required>
        <button class="btn btn-lg btn-info btn-block mt-5" type="submit" name="login-submit">Login</button>
        <div class="text-center mt-3">
            <a href="signup.php">Noch keinen Account? Hier registrieren</a>
            <p class="mt-5 mb-3 text-muted text-center">&copy; 2020</p>
        </div>
    </form>
</div>


<?php require "footer.php" ?>