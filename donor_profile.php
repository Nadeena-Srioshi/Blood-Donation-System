<!--  Name - MODERAGE I U
IT no - IT23834606  -->

<?php
    session_start();
    require 'donor_config.php';
?>
<?php
    
    if (isset($_SESSION['U_ID'])){

        $id = $_SESSION['U_ID'];

        $sql = "SELECT donor_id, dName, dGender, dob, dNIC, bloodType, dPhone, dEmail, dAddress
                FROM donor
                WHERE donor_id = '$id'";
                
        $result = $conn->query($sql);

        if($result->num_rows > 0){

        $donor = $result->fetch_assoc();
        } 
        else
        {
            echo "<script>alert('data retrieving failed')</script>";
        }
    }

    else
    {
        header("location:index.php");
    }
    mysqli_close($conn);
    
                    
?>
            <!DOCTYPE html>
            <head>
                <title>profile-DonorLink</title>
                <link rel="stylesheet" type="text/css" href="stylesIshoda/styles.css">
            </head>
            <body class="donorProfile">   
            <?php 
             include 'header.php';
                echo "<div class='profileInfo'>
                <div class='header-bar'>
                    <h1 id='he1'>Hello, ". $donor['dName']."</h1>";
                    echo "<div class='buttons'>";

                    echo "<a href='donor_profile_edit.php? id= $donor[donor_id] &name=$donor[dName] &dob=$donor[dob] &nic=$donor[dNIC] &Mobile=$donor[dPhone] &email=$donor[dEmail] &address=$donor[dAddress]'><button class='b1' id='edit'>Edit Profile</button></a> ";
                    echo "<a href='donor_appointment.php? id= $donor[donor_id]'><button class='b1' id='book' >Book Now</button></a><br>";
                    echo "<a href='donor_profile_delete.php? id= $donor[donor_id]'><button class='b1' id='del' >Delete Account</button></a><br>";
                    
                    echo "</div>
                </div>";
                echo "
                
                <p class='p1'>Donor id: ".$donor['donor_id']."</p>
                <p class='p1'>Name : ".$donor['dName']."</p>
                <p class='p1'>Gender : ".$donor['dGender']."</p>
                <p class='p1'>Dob : ".$donor['dob']."</p>
                <p class='p1'>NIC : ".$donor['dNIC']."</p>
                <p class='p1'>Blood Type : ".$donor['bloodType']."</p>
                <p class='p1'>Phone number : ".$donor['dPhone']."</p>
                <p class='p1'>E-mail : ".$donor['dEmail']."</p>
                <p class='p1'>Address : ".$donor['dAddress']."</p>";

                
                echo "<a href='#? id= $donor[donor_id]'><button class='b1'>Donation History</button></a><br>";
        
        ?>
        </table>
        
    </div>
    <div class="profileInfo">
        <h1 id="he1">Upcoming oppointments</h1>
        <?php
            include "donor_appointment_read.php";
        ?>
    </div>
    
    <?php include 'footer.php'; ?>
    
    </body>
</html>

    






