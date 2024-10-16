<!-- /* Name - WICKRAMASINGHE P B U R
IT no - IT23839274   */ -->

<?php
require_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $event_name = $_POST['event_name'];
    $organizer_name = $_POST['organizer_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $donor_count = $_POST['donor_count'];
    $s_date = $_POST['s_date'];
    $e_date = $_POST['e_date'];

    $sql = "INSERT INTO host_blood_drives (Event_Name, Organizer_Name, Phone_Number, Email, Location, Donor_Count, Start_Date, End_DATE)
            VALUES ('$event_name', '$organizer_name', '$phone', '$email', '$location', '$donor_count', '$s_date', '$e_date')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Blood drive request submitted successfully!');
        window.location.href = 'index.php';</script>";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
