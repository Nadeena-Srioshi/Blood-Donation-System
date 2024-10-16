<!-- /* Name - WICKRAMASINGHE P B U R
IT no - IT23839274   */ -->

<?php

require 'config.php';

// Get form data
$nic = $_POST['nic'];
$donor = $_POST['donor'];
$donation_date = $_POST['donation_date'];
$blood_type = $_POST['blood_type'];
$sample_id = $_POST['sample_id'];
$volume = $_POST['volume'];

// Update the record in the database
$sql = "UPDATE listofdonations SET Donor=?, Donation_Date=?, Blood_Type=?, Sample_ID=?, Volume=? WHERE NIC=?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssds", $donor, $donation_date, $blood_type, $sample_id, $volume, $nic);

if ($stmt->execute()) {
    echo "Record updated successfully";
    header("Location: HCPBloodCollection.php"); // Redirect back to the blood collection page
} else {
    echo "Error updating record: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
