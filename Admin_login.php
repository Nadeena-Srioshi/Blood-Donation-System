<!--  Name - Fernando Pulle N S
IT no - IT23836440 -->
<?php
       include_once "config.php";
       session_start();
?>

<?php
       if(isset($_POST['login'])){

              $email = $_POST["email"];
              $pass = $_POST["pass"];

              $sql = "SELECT * FROM admin WHERE username= '$email' and  password= '$pass'";

              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($result);
              $count = mysqli_num_rows($result);

              $conn -> close();
              
              if($count == 1){
                     //set the session if user does exist
                     $_SESSION['email'] = $email;
                     $_SESSION['user'] = 'admin';

                     //direct to hospital profile page
                     echo  "<script>
                                   alert('Successfull Login');
                                   window.location.href = 'AdminProfile_Read.php';
                            </script>";
                     //header('Location: index.php');

              }
              else{
                     $errorMessage = "Invalid username or password";
              }
       }
       //mysqli_close($conn);
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="./styles/recipientStyles/hospitalRegStyle.css">
       <title>DonorLink</title>
</head>
<body>
       <?php
              //include "header.php"
       ?>
       <div class="container">
       <div class="frame">
       
       <form action="./Admin_login.php" method="POST">
              <h2>Admin Login</h2><br>

              <label for="email" >Username </label><br>
              <input type="text" id="email" name="email" placeholder="Email"required><br><br>

              <label for="pass" >Password </label><br>
              <input type="password" id="pass" name="pass" placeholder="Password" required><br><br>

              <center>
                     <input type="submit" value="Login" id="btn" name="login">
              </center>
              
       </form>

       </div>
       </div>
       <?php// include "footer.php"; ?>
       
</body>
</html>