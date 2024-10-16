<!-- /* Name - WICKRAMASINGHE P B U R
IT no - IT23839274   */ -->

<?php
require_once 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM host_blood_drives WHERE ID='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $event_name = $_POST['event_name'];
    $organizer_name = $_POST['organizer_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $donor_count = $_POST['donor_count'];
    $s_date = $_POST['s_date'];
    $e_date = $_POST['e_date'];

    $sql = "UPDATE host_blood_drives SET Event_Name='$event_name', Organizer_Name='$organizer_name', Phone_Number='$phone', 
            Email='$email', Location='$location', Donor_Count='$donor_count', Start_Date='$s_date', End_DATE='$e_date' 
            WHERE ID='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Blood drive updated successfully!";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Blood Drive</title>
</head>
<body>
    <h1>Update Blood Drive</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
        <label for="event_name">Event Name:</label>
        <input type="text" name="event_name" value="<?php echo $row['Event_Name']; ?>"><br>

        <label for="organizer_name">Organizer's Name:</label>
        <input type="text" name="organizer_name" value="<?php echo $row['Organizer_Name']; ?>"><br>

        <label for="phone">Phone Number:</label>
        <input type="tel" name="phone" value="<?php echo $row['Phone_Number']; ?>"><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" value="<?php echo $row['Email']; ?>"><br>

        <label for="location">Location:</label>
        <input type="text" name="location" value="<?php echo $row['Location']; ?>"><br>

        <label for="donor_count">Estimated Number of Donors:</label>
        <input type="number" name="donor_count" value="<?php echo $row['Donor_Count']; ?>"><br>

        <label for="s_date">Donation Date:</label>
        <input type="date" name="s_date" value="<?php echo $row['Start_Date']; ?>"><br>

        <label for="time_slot">Pick Time Slot:</label>
        <input type="time" name="time_slot" value="<?php echo $row['Time_Slot']; ?>"><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
