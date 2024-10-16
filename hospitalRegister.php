<!-- Name - Fernando Pulle N S
IT no - IT23836440 -->

<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>DonorLink</title>
       <link rel="stylesheet" href="./styles/recipientStyles/hospitalRegStyle.css">
       <script src="./js/checkPassword.js"></script>
</head>
<body>
       <?php
              //include "header.php"
       ?>

       <div class="container">
       <div class="frame">
       
       <form action="hospitalSubmitreg.php" method="POST" onsubmit="return checkPass()" >
       <h2>Hospital Registration</h2><br>

              <label for="name">Hospital name: </label><br>
              <input type="text" id="name" name="name" required><br><br>

              <label for="website">Official website: </label><br>
              <input type="url" id="website" name="website" required><br><br>

              <div class="type">
                     <div>
                            <input type="radio" id="state" name="type" value="State" checked>
                            <label for="state">State hospital</label>
                     </div>
                     
                     <div>
                            <input type="radio" id="private" name="type" value="Private">
                            <label for="private">Private hospital</label>
                     </div>
                     
              </div><br>

              <label for="phone">Telephone number: </label><br>
              <input type="tel" id="phone" name="phone" required><br><br>

              <label for="address">Address: </label><br>
              <input type="text" id="address" name="address" required><br><br>
       

              <label for="email">Create username: </label><br>
              <input type="email" id="email" name="email" placeholder="Email address" required><br><br>

              <label for="pass1">Create password: </label><br>
              <input type="password" id="pass1" name="password" placeholder="hgYU67@" required><br><br>

              <label for="pass2">Re-enter password: </label><br>
              <input type="password" id="pass2" required><br><br>

              <p id="errorMsg"></p><br>

              <p>Already have an account?  <a href="hospitalLogin.php">Login</a></p>

              <center>
                     <input type="submit" value="Register" id="btn" >
              </center>
       </form>

       </div>
       </div>
       <?php //include "footer.php"; ?>
</body>
</html>
<!--   <textarea name="address" id="address" cols="45" rows="3"></textarea><br>-->