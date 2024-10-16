<!-- /* Name - PRATHIBA H A S 
IT no - IT23832008    */ -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blood Collection</title>
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
          <h2>List Of Donations</h2><br>
          <div>
            <button id="newEntryBtn"><a href="EntryForm.php">Add New Entry</a></button>
            <br>
            <table>
              <thead>
                <tr>
                  <th>NIC</th>
                  <th>Donor</th>
                  <th>Donation Date</th>
                  <th>Blood Type</th>
                  <th>Sample ID</th>
                  <th>Volume(ml)</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <!-- data will be fetched -->
                <?php
                require 'config.php';

                // Fetch data from the list of donations table
                $sql = "SELECT NIC, Donor, Donation_Date, Blood_Type, Sample_ID, Volume FROM listofdonations";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row['NIC'] . "</td>
                                <td>" . $row['Donor'] . "</td>
                                <td>" . $row['Donation_Date'] . "</td>
                                <td>" . $row['Blood_Type'] . "</td>
                                <td>" . $row['Sample_ID'] . "</td>
                                <td>" . $row['Volume'] . "</td>
                                <td>
                                    <a href='HCPEdit.php?nic=" . $row['NIC'] . "' id='edit-btn'>Edit</a>  
                                    <a href='HCPDelete.php?nic=" . $row['NIC'] . "' class='delete-btn' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No records found</td></tr>";
                }

                $conn->close();
                ?>
              </tbody>
            </table>
          </div>
        </section>

        <hr>
<!--
        <section id="section2">
          <div>
            <h2>List Of Expired Samples</h2><br>
            <table>
              <thead>
                <tr>
                  <th>Sample ID</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                
                <tr>
                  <td>Sampleffgbg ID</td>
                  <td>Dategbfgbfgb</td>
                  <td>Actiongbfbhfn</td>
                </tr>
                <tr>
                  <tr>
                    <td>Sampleffgbg ID</td>
                    <td>Dategbfgbfgb</td>
                    <td>Actiongbfbhfn</td>
                  </tr>
                </tr>
                  <td>Sampleffgbg ID</td>
                  <td>Dategbfgbfgb</td>
                  <td>Actiongbfbhfn</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
              -->
        <center>
        
        </center>
      </div>
    </div>
    <script src="HCPBloodCollection.js"></script>
  </body>
</html>
