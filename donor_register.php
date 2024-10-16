<!--  Name - MODERAGE I U
IT no - IT23834606  -->

<?php
session_start();

require 'donor_config.php';

if (isset($_POST['submit']))
{
    $donorName = $_POST["name"];
    $donorG = $_POST["gender"];
    $donorDob = $_POST["dob"];
    $donorNIC = $_POST["nic"];
    $donorBType = $_POST["bloodType"];
    $donorPhone = $_POST["Mobile"];
    $donorEmail = $_POST["email"];
    $donorAddress = $_POST["address"];
    $donorPassword = $_POST["pswrd"];

    $sql1 = "SELECT dEmail FROM donor WHERE dEmail = '$donorEmail'";
    $result = mysqli_query($conn, $sql1);

    if(mysqli_num_rows($result) == 0)
    {
        $sql = "INSERT INTO donor(donor_id, dName,dGender,dob, dNIC, bloodType, dPhone, dEmail, dAddress, dPassword) 
        VALUES 
        ('','$donorName','$donorG', '$donorDob', '$donorNIC','$donorBType', '$donorPhone', '$donorEmail', '$donorAddress', '$donorPassword')";

        if(mysqli_query($conn, $sql))
        {
            echo "<script>alert('Insert successful!')
            window.location.href = 'donor_login.html';</script>";
        }
        else
        {
            echo "Error".$conn->error;
        }
    }else
    {
        echo "<script>alert('User name has already taken!');
        window.location.href = 'donor_register.html';</script>";
    }
}
    $conn->close();
?>
