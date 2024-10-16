<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Requests</title>
    <link rel="stylesheet" href="styles/HCPBloodCollection.css" />
    <link rel="stylesheet" href="styles/HCPRequests.css" />
    
  </head>
  <body>
    <header>
      
    </header>

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
          <h2>Donor Appointments</h2><br>
          <div>
            <br>
            <table>
              <thead>
                <tr>
                  <th>Appointment Id</th>
                  <th>Type</th>
                  <th>Center</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Weight</th>
                  <th>Height</th>
                  <th>Donor ID</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                
                <?php
                require 'config.php';

                $sql = "SELECT Appointment_id, Type, Center, Date, Time, Weight, Height, donor_id FROM donor_appointment";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                      echo "<tr>
                              <td>" . $row["Appointment_id"] . "</td>
                              <td>" . $row['Type'] . "</td>
                              <td>" . $row['Center'] . "</td>
                              <td>" . $row['Date'] . "</td>
                              <td>" . $row['Time'] . "</td>
                              <td>" . $row['Weight'] . "</td>
                              <td>" . $row['Height'] . "</td>
                              <td>" . $row['donor_id'] . "</td>
                              <td>
                                  <button id='approve-btn'>Approve</button>
                                  <button id='decline-btn' onclick='return confirm(\"Are you sure you want to decline?\")'>Decline</button>
                              </td>
                            </tr>";
                  }
                } else {
                  echo "<tr><td colspan='8'>No records found</td></tr>";
                }

                $conn->close();
                ?>

              </tbody>
            </table>
          </div>
        </section>
        <center>
        <footer>
          <p>Copyright &copy; 2024 <b>Website</b>. All rights reserved.
            <a href="#">Terms & Conditions</a> | <a href="#">Privacy Policy</a>
          </p>
        </footer>
        </center>
      </div>
    </div>
  </body>
</html>
