<!-- Name - PRATHIBA H A S 
IT no - IT23832008   -->

<?php

require 'config.php';

// Get form data
$nic = $_POST['nic'];
$donor = $_POST['donor'];
$donation_date = $_POST['donation_date'];
$blood_type = $_POST['blood_type'];
$sample_id = $_POST['sample_id'];
$volume = $_POST['volume'];

// Insert data into the database
$sql = "INSERT INTO listofdonations (NIC, Donor, Donation_Date, Blood_Type, Sample_ID, Volume) 
        VALUES ('$nic', '$donor', '$donation_date', '$blood_type', '$sample_id', '$volume')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: HCPBloodCollection.php"); // Redirect to the main table
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
