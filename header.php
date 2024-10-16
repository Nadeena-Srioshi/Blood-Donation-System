<!-- Name - Fernando Pulle N S
IT no - IT23836440  -->

<?php
       session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="icon" href="images/drop2.png">
       <link rel="stylesheet" href="./styles/header.css">
       <title>DonorLink</title>
</head>
<body>
<header>
       <div class="header-container">
              <div class="logo">
                  <img src="images/drop1.png" alt="Logo" class="pic">
                  <span class="name">DonorLink</span>
              </div>

              <ul class="links">
                     <li><a href="index.php">Home</a></li>
                     <li><a href="donationProcess.php">Donation process</a></li>
                     <li><a href="NewsCampaigns.php">News & campaign</a></li>
                     <li><a href="eligibility.php">Eligibility</a></li>
                     <li><a href="about_us.php">About us</a></li>
                     <li><a href="faq.php">FAQ</a></li>
              </ul>

              <div class="buttons">
              <?php if(isset($_SESSION['email']) && isset($_SESSION['user'])): ?>
                <!-- Display profile icon and logout button if user is logged in -->
                <div class="dropdown">
                    <img src="./images/profile.png" alt="Profile" class="profile-icon" width="35px">
                    <div class="users">
                     
                     <a href=<?php if($_SESSION['user'] == 'donor'){
                            echo "donor_profile.php";
                     }
                     elseif($_SESSION['user'] == 'hospital'){
                            echo "hospitalProfile.php";
                     }
                     
                     elseif($_SESSION['user'] == 'admin'){
                            echo "AdminProfile_Read.php";
                     }

                     else echo "error";

                     ?>>Profile</a>
                        <a href="logoff.php">Logout</a>
                    </div>
                </div>
              <?php else: ?>

                     <div class="dropdown">
                            <button>Sign in</button>
                            <div class="users">
                                   <a href="donor_login.html">Donor</a>
                                   <a href="hospitalLogin.php">Hospital</a>
                                   <a href="Admin_login.php">Admin</a>
                            </div>
                     </div>

                     <div class="dropdown">
                            <button>Sign up</button>
                            <div class="users">
                                   <a href="donor_register.html">Donor</a>
                                   <a href="./hospitalRegister.php">Hospital</a>
                            </div>
                     </div>
              <?php endif; ?>   
              </div>
       </div>

</header> 
</body>
</html> 

