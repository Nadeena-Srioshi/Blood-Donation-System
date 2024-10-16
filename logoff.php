<!-- Name - Fernando Pulle N S
IT no - IT23836440 -->

<?php
       session_start();

       if(isset($_SESSION["email"])) {
              session_destroy();
              header("Location:index.php");
       }
       else {
              header("Location:index.php");
       }
?>
