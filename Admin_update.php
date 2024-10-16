<!-- /* Name - WICKRAMASINGHE P B U R
IT no - IT23839274   */ -->

<?php
require_once 'connection.php';
?>

<?php
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $button = $_GET['button'];

    if($button == 'approve'){
        $sql = "UPDATE host_blood_drives SET Status = 'Approved' WHERE ID = '$id'";
    }
    elseif($button == 'decline'){
        $sql = "UPDATE host_blood_drives SET Status = 'Declined' WHERE ID = '$id'";
    }
    
    if ($conn->query($sql) === TRUE){
        //echo "Blood drive Status updated successfully!";
        header('location:AdminProfile_Read.php');
    }
    else{
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>