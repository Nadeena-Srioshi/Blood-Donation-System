<!-- Name - Fernando Pulle N S
IT no - IT23836440 -->

<?php
       include_once "config.php"
?>

<?php
       $email = $_POST["email"];
       $name = $_POST["name"];
       $website = $_POST["website"];
       $type = $_POST["type"];
       $phone = $_POST["phone"];
       $address = $_POST["address"];
       $password = $_POST["password"];

       $sql1= "SELECT hos_email FROM hospital WHERE hos_email = '$email'";
       $result = mysqli_query($conn, $sql1);

       if(mysqli_num_rows($result) == 0){

              $sql2 = "INSERT INTO hospital(hos_id, hos_name, hos_website, hos_type, hos_phone, hos_email, hos_address, hos_password)
              VALUES ('', '$name', '$website', '$type', '$phone', '$email', '$address', '$password')";

              if(mysqli_query($conn, $sql2)){
                     echo "<script>alert('Submitted successfully')</script>";
                     header("location: hospitalLogin.php");
              }
              else{
                     echo "<script>alert('Error in submit!!')</script>";
              }

       }
       else{
              echo "<script>
                            alert('username has already taken');
                     </script>";
              //header("location: hospitalRegister.php");
       }

       mysqli_close($conn);
?>
