<?php
session_start();
require("partials/header.php");
?>
<?php

    if(isset($_SESSION['userfeedback'])) {
      echo "<div class='alert alert-success'>"."<i>". $_SESSION['userfeedback']."</i>"."</div>";
      unset($_SESSION['userfeedback']);
    }
?>

<?php require_once("partials/footer.php") ?>
</body>
</html>
