<!-- /* Name - AMARASENA J D
IT no - IT23725874  */ -->

<?php
       include "config.php";
?>

<?php
    $id = $_GET['id'];

    $sql = "DELETE FROM donor_appointment WHERE Appointment_id = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
       //echo "<script>alert('Record Deleted');</script>";
       header('location:donor_profile.php');
    }
    else{
       echo "error in cancelling". $conn->error;
    }
    mysqli_close($conn);
?>