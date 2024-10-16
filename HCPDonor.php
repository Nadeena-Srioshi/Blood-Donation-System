<?php

require 'config.php';

// Fetch data from the table
$sql = "SELECT donor_id, dName, dGender, dob, dNIC, bloodType, dPhone, dEmail, dAddress FROM donor";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Requests</title>
    <link rel="stylesheet" href="styles/HCPBloodCollection.css" />
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
        <section id="section1">
          <h2>Donor details</h2><br>
          <div>
            <br>
            <table>
              <thead>
                <tr>
                  <th>Donor id</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <th>DOB</th>
                  <th>NIC</th>
                  <th>Blood Type</th>
                  <th>Phone Number</th>
                  <th>E-mail</th>
                  <th>Address</th>
                </tr>
              </thead>
              <tbody>
               
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row['donor_id'] . "</td>
                                <td>" . $row['dName'] . "</td>
                                <td>" . $row['dGender'] . "</td>
                                <td>" . $row['dob'] . "</td>
                                <td>" . $row['dNIC'] . "</td>
                                <td>" . $row['bloodType'] . "</td>
                                <td>" . $row['dPhone'] . "</td>
                                <td>" . $row['dEmail'] . "</td>
                                <td>" . $row['dAddress'] . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='9'>No records found</td></tr>";
                }

                $conn->close();
                ?>
              </tbody>
            </table>
          </div>
        </section>
      </div>
    </div>
    
  </body>
</html>
