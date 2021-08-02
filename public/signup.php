<?php session_start(); ?>
<?php require "header.php" ?>

<div>
    <form class="col-3 mx-auto my-5 form-signin w-25" action="../includes/signup.inc.php" method="post">
        <div class="text-center mb-5">
            <h1 class="h3 mb-3 font-weight-normal">Registrieren</h1>
        </div>
        <input type="username" id="user" name="user" class="form-control my-4" placeholder="Username" pattern="^[A-Za-z0-9_.]+$" required>
        <input type="email" id="mail" name="email" class="form-control my-4" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
        <input type="password" id="pwd" name="pwd" class="form-control my-4" placeholder="Passwort" pattern=".{8,}" maxlength="56" required>
        <input type="password" name="pwd-repeat" class="form-control my-4" placeholder="Passwort wiederholen" required>
        <button class="btn btn-lg btn-info btn-block mt-5" type="submit" name="signup-submit" >Registrieren</button>
        <div class="text-center mt-3">
            <p class="mt-5 mb-3 text-muted text-center">&copy; 2020</p>
        </div>
    </form>
</div>

<?php require "footer.php" ?>