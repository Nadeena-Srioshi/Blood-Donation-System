<!-- /* Name - WICKRAMASINGHE P B U R
IT no - IT23839274   */ -->

<?php
require_once 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM host_blood_drives WHERE ID='$id'";

    if ($conn->query($sql) === TRUE) {
        //echo "Blood drive deleted successfully!";
        //echo "Blood drive Status updated successfully!";
        header('location:AdminProfile_Read.php');

    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
Admin_decline.php