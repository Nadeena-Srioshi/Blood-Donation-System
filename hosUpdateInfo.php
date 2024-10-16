<!-- Name - Fernando Pulle N S
IT no - IT23836440 -->

<?php
       include_once "config.php";
?>

<?php
    if($_GET['update']){
       echo"hii broo";
       $id = $_GET['id'];
       $name =$_GET['name'];
       $type =$_GET['type'];
       $website=$_GET['website'];
       $phone = $_GET['phone'];
       $email=$_GET['email'];
       $address=$_GET['address'];
        
       $sql = "UPDATE hospital SET
              hos_name = '$name', 
              hos_type = '$type',
              hos_website = '$website', 
              hos_phone = '$phone', 
              hos_email = '$email', 
              hos_address = '$address'
              WHERE hos_id = '$id'";
       $result = mysqli_query($conn,$sql);
        
       if($result){
              
              echo "<script>alert('Record Updated!!')
              window.location.href = 'hospitalProfile.php';</script>";
       }else{
              echo "<script>alert('Error in Update')</script>";
       }
    }
    mysqli_close($conn);


?>