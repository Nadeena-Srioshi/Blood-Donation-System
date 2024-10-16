<!-- /* Name - WICKRAMASINGHE P B U R
IT no - IT23839274   */ -->

<?php

SESSION_start();
require_once 'connection.php';

$sqlAll = "SELECT * FROM  host_blood_drives";
$result = $conn->query($sqlAll);

$sql_declined = "SELECT * FROM host_blood_drives WHERE Status = 'Declined'";
$result_declined = $conn->query($sql_declined);

$email = $_SESSION['email'];

$sql_name = "SELECT name FROM admin WHERE username = '$email'";
echo "$email";
$result_name = mysqli_query($conn, $sql_name);
$row = mysqli_fetch_assoc($result_name);
$name = $row['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <link rel="stylesheet" href="AdminProfile.css">
    
</head>
<link rel="stylesheet" href="AdminProfile.css">
<?php include "header.php"; ?>
<body>
     <!-- Main Content -->
     <main class="main-content">
            <div class="admin-header">
                <table>
                    <tr style="height:50px">
                <th><h1><center>Administration System</center></h1></th>
                    </tr> 
                </table>
                <table>
                <tr style="height:20px">
                <th>
                    
                <img src="Images/AdminImages/user.png" alt="Admin Icon" width="70" height="70" style="float:left">
                <h2 style="text-align:left;">Welcome !</h2><br>
                <span style="text-align:left; font-size:20px;"><?php echo "$name"?></span>
                <button style="float:right" onclick="window.location.href = 'HCPhome.php'">View Blood Inventory</button>
                </th>
            </tr>
            </table>
            </div>
<br>
<h2>Blood drive campaign requests</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Event Name</th>
            <th>Organizer Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Location</th>
            <th>Donor Count</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Actions</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["ID"] . "</td>";
                echo "<td>" . $row["Event_Name"] . "</td>";
                echo "<td>" . $row["Organizer_Name"] . "</td>";
                echo "<td>" . $row["Phone_Number"] . "</td>";
                echo "<td>" . $row["Email"] . "</td>";
                echo "<td>" . $row["Location"] . "</td>";
                echo "<td>" . $row["Donor_Count"] . "</td>";
                echo "<td>" . $row["Start_Date"] . "</td>";
                echo "<td>" . $row["End_Date"] . "</td>";

                if($row['Status'] == 'Pending'){
                    
                    echo "<td><div class='buttons'><a href='Admin_update.php?id=$row[ID] &button=approve '><button class= 'approve'> Approve </button></a>
                    <a href='Admin_update.php?id=" . $row["ID"] . "&button=decline'><button class= 'decline'> Decline </button></a></div></td>";
                }
                else{
                    echo "<td>" . $row["Status"] . "</td>";
                }
                
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='10'>No Blood Drives Available</td></tr>";
        }
        ?>
     </table>
<hr>
   
</table>

<br>
<h2>Declined Blood Drives</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Event Name</th>
        <th>Organizer Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Location</th>
        <th>Donor Count</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Delete</th>
    </tr>

    <?php
    if ($result_declined->num_rows > 0) {
        while ($row = $result_declined->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["ID"] . "</td>";
            echo "<td>" . $row["Event_Name"] . "</td>";
            echo "<td>" . $row["Organizer_Name"] . "</td>";
            echo "<td>" . $row["Phone_Number"] . "</td>";
            echo "<td>" . $row["Email"] . "</td>";
            echo "<td>" . $row["Location"] . "</td>";
            echo "<td>" . $row["Donor_Count"] . "</td>";
            echo "<td>" . $row["Start_Date"] . "</td>";
            echo "<td>" . $row["End_Date"] . "</td>";

            echo "<td><a href='Admin_delete.php?id=" . $row["ID"] . "'><button class='decline'>Delete Record</button></a></td>";

            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='10'>No Declined Blood Drives Available</td></tr>";
    }
    ?>
</table>

</body>
</html>
