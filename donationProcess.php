<!-- /* Name - Fernando Pulle N S
IT no - IT23836440 */ -->
<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>DonorLink</title>
       <link rel="stylesheet" href="./styles/donationProcess.css">
       
</head>

<body>
       <?php include "header.php"; ?>

       <div class="navigation">
              <div class="section" id="before-section" onclick="contentLoad('before', this)">Before you donate</div>
              <span>&gt;</span>
              <div class="section" id="during-section" onclick="contentLoad('during', this)">When you donate</div>
              <span>&gt;</span>
              <div class="section" id="after-section" onclick="contentLoad('after', this)">After you donate</div>
       </div>

       <div class="container" id="content-container">

       </div>
       
       <br><br><br><br>
       <script src="./js/donationProcess.js"></script>
       <?php include('footer.php') ?>
  
</body>
</html>

