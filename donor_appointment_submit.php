<!-- /* Name - AMARASENA J D
IT no - IT23725874  */ -->

<?php
       include_once "config.php";
       SESSION_start();
?>

<?php

       if(isset($_POST['booked'])){

              $id = $_SESSION['U_ID'];
              
              $type = $_POST["type"];
              $center = $_POST["center"];
              $date = $_POST["date"];
              $time = $_POST["time"];
              $weight = $_POST["weight"];
              $height = $_POST["height"];
              $concerns = $_POST["concerns"];
       }

       if(!$id){
              die("idiot");
       }
       
       $sql = "INSERT INTO donor_appointment(appointment_id, type, center, date, time, weight, height, concerns, donor_id) 
       VALUES('', '$type', '$center', '$date', '$time', '$weight', '$height', '$concerns', '$id')";

       $result = mysqli_query($conn, $sql);

       if($result){
              echo "<script>alert('You have booked an appointment');
              window.location.href = 'donor_Profile.php';</script>";
              //header("location: .php");
       }
       else{
              echo "<script>alert('Error in booking!!')</script>";
       }
       

       

       mysqli_close($conn);
?>
