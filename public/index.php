<?php require "../includes/checkloginstatus.inc.php" ?>
<?php require "header.php" ?>

<div>

    <?php

    echo session_id() . '<br>';
    echo $_SESSION['username'] . '<br>';

    ?>

</div>

<?php require "footer.php" ?>