<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="icon" href="images/drop2.png">
       <link rel="stylesheet" href="./styles/index.css">
       <title>DonorLink</title>
</head>

<body>
       <?php
              include "header.php"
       ?>
       
       <section class="hero-section">
              <div>
                     <h1>Donate Blood, Save Lives</h1>
                     <p>Join our community and make a difference in someone's life today!</p>
                     <button onclick="location.href='donor_register.html'">Become a Donor</button>
              </div>
       </section>

       <!-- Info Section -->
       <section class="info-section">
              <h2>Why Donate Blood?</h2>
              <div class="content">
                     <div class="info-box">
                            <img src="./images/pic1.jpeg" alt="pic1">
                            <p>Blood donation helps save lives by providing blood to those in need, especially in emergencies.</p>
                     </div>
                     <div class="info-box">
                            <img src="./images/pic2.jpeg" alt="pic2">
                            <p>One donation can potentially save up to three lives. Be a part of the life-saving mission.</p>
                     </div>
                     <div class="info-box">
                            <img src="./images/pic3.jpeg" alt="pic3">
                            <p>It's quick, simple, and safe. Become a regular donor and make a lasting impact.</p>
                     </div>
              </div>
       </section>

       <section class="host-section">
              <h2>Are you interested in hosting a blood drive?</h2>
              <p>Join us in saving lives by hosting your own blood drive event.</p>
              <a href="HostaBloodDrive.html">Learn More & Host</a>
       </section>
       <br>
       
       <?php
              include "footer.php"
       ?>
       
</body>
</html>