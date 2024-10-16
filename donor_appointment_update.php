<!-- /* Name - AMARASENA J D
IT no - IT23725874  */ -->

<?php
       include "config.php";
       
?>

<?php

       $id = $_GET['Appointment_ID'];
       $Type = $_GET['Type'];
       $Center = $_GET['Center'];
       $Date = $_GET['Date'];
       $Time = $_GET['Time'];
       $Concerns = $_GET['Concerns'];


       $sql = "UPDATE donor_appointment 
              SET Type = '$Type',
              Center = '$Center',
              Date = '$Date',
              Time = '$Time',
              Concerns = '$Concerns'
              WHERE Appointment_id = '$id'";

       $result = mysqli_query($conn, $sql);

       if($result){
       
       echo "<script>alert('Record Updated!!')</script>";
       header('location:donor_profile.php');
       }
       else{
       echo"<script>alert('error in updating!!')</script>";
       }
       mysqli_close($conn);
?>