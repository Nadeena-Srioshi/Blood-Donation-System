<!--  Name - MODERAGE I U
IT no - IT23834606  -->

<?php
    require 'donor_config.php';

    $id = $_GET['id'];

    $sql = "DElETE FROM donor WHERE donor_Id='$id'";

    if($conn -> query($sql))
    {
        echo "<script>alert('Record Deleted!!')
        window.location.href = 'eligibility_quiz.php';</script>";
        include "logoff.php";
    }
    else
    {
        echo "Not deleted". $conn->error;
    }

    $conn -> close();
?>