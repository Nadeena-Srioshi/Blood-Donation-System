<!-- /* Name - PRATHIBA H A S 
IT no - IT23832008    */ -->

<?php

require 'config.php';

if (isset($_GET['nic'])) {
    $nic = $_GET['nic'];
    
    $sql = "DELETE FROM listofdonations WHERE NIC='$nic'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location: HCPBloodCollection.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
