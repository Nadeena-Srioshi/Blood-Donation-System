<!-- Name - Fernando Pulle N S
IT no - IT23836440 -->

<?php
    include_once 'config.php';
?>

<?php
       echo "<script>confirm('Are you sure you want to delete your account?')</script>";
              $id=$_GET['id'];
              $sql = "DELETE FROM hospital WHERE hos_id = '$id'";
              $result = mysqli_query($conn, $sql);

              if($result){
                     echo "<script>alert('Your account Deleted!!')</script>";
                     include 'logoff.php';
                     
              }
              else{
                     echo "<script>alert('Error in Delete')</script>". $conn->error;;
              }
       
       mysqli_close($conn);
?>


