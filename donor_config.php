<?php
    $conn = new mysqli("localhost","root","","donorLink");

    if($conn ->connect_error)
    {
         die("connection failed" .$con->connect_error);
    }
    
?>