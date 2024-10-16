<!--  Name - MODERAGE I U
IT no - IT23834606  -->

<?php
    $conn = new mysqli("localhost","root","","donorLink");

    if($conn ->connect_error)
    {
         die("connection failed" .$conn->connect_error);
    }
    

?>