<?php

require 'config.php';

$sql = "SELECT Blood_Type, SUM(Volume) as total_volume FROM listofdonations GROUP BY Blood_Type";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}

// Array of  blood types
$blood_types = ['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-'];

$blood_volumes = array_fill_keys($blood_types, 0);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $blood_volumes[$row['Blood_Type']] = $row['total_volume'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="styles/HCPBloodCollection.css" />
    <link rel="stylesheet" href="styles/HCPhome.css" />
  </head>
  <body>
    <div class="wrapper">
      <div class="sideNav">
        <h1>Blood Inventory</h1>
        <ul>
          <li><a href="HCPhome.php">Home</a></li>
          <li><a href="HCPBloodCollection.php">Blood collection</a></li>
          <li><a href="AdminProfile_Read.php">Campaign requests</a></li>
          <li><a href="HCPDonor.php">Donors</a></li>
          <li><a href="HCPRequests.php">Requests</a></li>
        </ul>
      </div>  

      <div class="main-content">
        <section class="blood-volumes">
          <h2>Blood Volume by Blood Type</h2>
          <div class="boxes-container">
            <?php
              foreach ($blood_volumes as $type => $volume) {
                echo "<div class='box'><h3>$type</h3><p>$volume ml</p></div>";
              }
            ?>
          </div>
        </section>
      </div>
    </div>
  </body>
</html>
