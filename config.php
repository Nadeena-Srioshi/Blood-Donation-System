<!-- /* Name - Fernando Pulle N S
IT no - IT23836440 */ -->

<?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $db = "donorLink";

       // Create connection
       $conn = new mysqli($servername, $username, $password, $db);

       // Check connection
       if($conn -> connect_error){
              die("Database connection failed: " . $conn -> connect_error);
       }
       //echo "Database connection successful";
?>











