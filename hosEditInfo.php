<!-- Name - Fernando Pulle N S
IT no - IT23836440 -->

<?php 
    SESSION_start();
    include_once "config.php" ;
?>
<?php
       
    $id = $_GET['id'];
    $name =$_GET['name'];
    $website=$_GET['website'];
    $type = $_GET['type'];
    $phone = $_GET['phone'];
    $email=$_GET['email'];
    $address=$_GET['address'];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> DonorLink</title>
    <link rel="stylesheet" href="./styles/recipientStyles/hospitalProfileStyle.css">
</head>
<body>
    <?php //include "header.php"; ?>
<center>
       <div class="EditContainer">
       <form action="hosUpdateInfo.php" method="GET">
              <table border="0" width="70%">
              <tr>
                     <td>Hospital ID</td>
                     <td><input type="text" value="<?php echo "$id"?>" name="id" readonly></td>
              </tr>
              <tr>
                     <td>Hospital Name</td>
                     <td><input type="text" value="<?php echo "$name"?>" name="name" ></td>
              </tr>
              
              <tr>
                     <td>Website</td>
                     <td><input type="text" value="<?php echo "$website"?>" name="website" ></td>
              </tr>
              <tr>
                     <td>Hospital Type</td>
                     <td>
                     
                            <input type="radio" value="State" id="state" name="type" <?php if(strcmp($type, 'State')) echo 'checked'; ?>>
                            <label for="state">State</label>
                            <input type="radio" value="Private" id="private"name="type" <?php if(strcmp($type, 'Private')) echo 'checked'; ?>>
                            <label for="private">Private</label>
                     </td>
              </tr>
              <tr>
                     <td>Telephone number</td>
                     <td><input type="tel" value="<?php echo "$phone"?>" name="phone" ></td>
              </tr>
              <tr>
                     <td>Email address</td>
                     <td><input type="email" value="<?php echo "$email"?>" name="email" readonly></td>
              </tr>
              <tr>
                     <td>Location</td>
                     <td><input type="text" value="<?php echo "$address"?>" name="address" ></td>
              </tr>
              
              </table><br>
              <input type="submit" value="Update" name="update" id="update">
       </form>
       </div>
       </center>
       
</body>
</html>