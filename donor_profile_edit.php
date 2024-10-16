<!--  Name - MODERAGE I U
IT no - IT23834606  -->

<?php

    session_start();

    require 'donor_config.php';
    /*$id = $_SESSION['id'];

    if(!isset($id))
    {
        header('location:login_donor.php')
    }*/
    //if (isset($_SESSION['dId'])) {
    //    $id = $_SESSION['dId'];
    
    //    $sql = "SELECT * FROM donor WHERE donor_id = '$id'";
    //    $result = $conn->query($sql);
        
    //    if ($result && $result->num_rows > 0) {
    //        $donor = $result->fetch_assoc();
    //    } else {
    //        echo "Donor information not found.";
    //        exit;
    //    }
    //} else {
    //    echo "Donor ID not found in session.";
    //    exit;
    //}


    $id = $_GET['id'];
    $name = $_GET["name"];
    $dDob = $_GET["dob"];
    $nic = $_GET["nic"];
    $phone = $_GET["Mobile"];
    $email = $_GET["email"];
    $address = $_GET["address"];


?>
<html>
    <head>
        <title>Update profile</title>
        <link rel="stylesheet" type="text/css" href="stylesIshoda/styles.css">
    </head>
    <body>
        <fieldset class="c1">

        <!--<form action="update_donor.php" method="GET">
       <table border="0" width="25%">
       <tr>
              <td>donor ID</td>
              <td><input type="text" value="<?//php echo "$id"?>" name="id" readonly></td>
       </tr>
       <tr>
              <td>donor Name</td>
              <td><input type="date" value="<?//php echo "$name"?>" name="name" ></td>
       </tr>
       
       <tr>
              <td>dob</td>
              <td><input type="text" value="<?//php echo "$dDob"?>" name="dob" ></td>
       </tr>
      <tr>
              <td>Hospital Type</td>
              <td>
                     <input type="radio" value="<?php// echo "$Quantity"?>" name="type" >
                     <input type="radio" value="<?php //echo "$Quantity"?>" name="type" >
              </td>
       </tr>
       <tr>
              <td>Telephone number</td>
              <td><input type="tel" value="<?php //echo "$phone"?>" name="Mobile" ></td>
       </tr>
       <tr>
              <td>Email address</td>
              <td><input type="email" value="<?php //echo "$email"?>" name="email" readonly></td>
       </tr>
       <tr>
              <td>Location</td>
              <td><input type="text" value="<?php //echo "$address"?>" name="address" ></td>
       </tr>
       <tr>
              <td></td>
              <td><input type="submit" value="update" name="update"></td>
       </tr>
       </table>-->


                <form action="donor_profile_update.php" method="GET">
                <h3 id="he2">Personal Information</h3>
                <p id="p1">ID : <input type="text" id="p2" value="<?php echo "$id"?>" name="id" readonly></p>

                <p id="p1">Name : <input type="text" id="p2" value="<?php echo "$name"?>" name="name" required></p>

                <p id="p1">Date of Birth : <input type="date" id="p2" value="<?php echo "$dob"?>" name="dob" required></p>

                <p id="p1">NIC : <input type="text" id="p2" value="<?php echo "$nic"?>" name="nic" required></p><br>

                <h3 id="he2">Contact Information</h3>

                <p id="p1">Phone number : <input type="tel" id="p2" value="<?php echo "$phone"?>" name="Mobile" required></p>
                         
                <p id="p1">E-mail : <input type="email" id="p2" value="<?php echo "$email"?>" name="email" required></p>

                <p id="p1">Address : <textarea name="address" id="p2" rows="4"  value="<?php echo "$address"?>" name="address" required></textarea></p2><br><br>

                <p><input type = "submit" value = "update" name="update" class="b1"></p>
            </form>
        </fieldset>
    </body>
</html>