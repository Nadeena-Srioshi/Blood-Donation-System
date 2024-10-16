<?php

require 'config.php';

if (isset($_GET['nic'])) {
    $nic = $_GET['nic'];

    $sql = "SELECT * FROM listofdonations WHERE NIC='$nic'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No record found.";
        exit;
    }
} else {
    echo "No NIC specified.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/HCPForm.css" />
    <title>Edit Blood Donation Record</title>
    <script>
        function validateForm() {
            const donor = document.forms["editForm"]["donor"].value;
            const donationDate = document.forms["editForm"]["donation_date"].value;
            const sampleId = document.forms["editForm"]["sample_id"].value;
            const volume = document.forms["editForm"]["volume"].value;

            if (donor === "" || donationDate === "" || sampleId === "" || volume === "") {
                alert("All fields must be filled out");
                return false;
            }

            if (isNaN(volume) || volume <= 0) {
                alert("Volume must be a positive number");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <div class="entryForm">
        <h2>Edit Blood Donation Record</h2>
        <form name="editForm" action="updateRecord.php" method="post" onsubmit="return validateForm()">
            <input type="hidden" name="nic" value="<?php echo htmlspecialchars($row['NIC']); ?>">

            <label for="donor">Donor Name:</label><br>
            <input type="text" id="donor" name="donor" value="<?php echo htmlspecialchars($row['Donor']); ?>"><br><br>

            <label for="donation_date">Donation Date:</label><br>
            <input type="date" id="donation_date" name="donation_date" value="<?php echo htmlspecialchars($row['Donation_Date']); ?>"><br><br>

            <label for="blood_type">Blood Type:</label><br>
            <select id="blood_type" name="blood_type">
                <option value="A+" <?php echo ($row['Blood_Type'] == 'A+') ? 'selected' : ''; ?>>A+</option>
                <option value="A-" <?php echo ($row['Blood_Type'] == 'A-') ? 'selected' : ''; ?>>A-</option>
                <option value="B+" <?php echo ($row['Blood_Type'] == 'B+') ? 'selected' : ''; ?>>B+</option>
                <option value="B-" <?php echo ($row['Blood_Type'] == 'B-') ? 'selected' : ''; ?>>B-</option>
                <option value="O+" <?php echo ($row['Blood_Type'] == 'O+') ? 'selected' : ''; ?>>O+</option>
                <option value="O-" <?php echo ($row['Blood_Type'] == 'O-') ? 'selected' : ''; ?>>O-</option>
                <option value="AB+" <?php echo ($row['Blood_Type'] == 'AB+') ? 'selected' : ''; ?>>AB+</option>
                <option value="AB-" <?php echo ($row['Blood_Type'] == 'AB-') ? 'selected' : ''; ?>>AB-</option>
            </select><br><br>

            <label for="sample_id">Sample ID:</label><br>
            <input type="text" id="sample_id" name="sample_id" value="<?php echo htmlspecialchars($row['Sample_ID']); ?>"><br><br>

            <label for="volume">Volume (ml):</label><br>
            <input type="number" id="volume" name="volume" value="<?php echo htmlspecialchars($row['Volume']); ?>"><br><br>

            <center>
                <input type="submit" id="submitBtn" value="Update">
            </center>
        </form>
    </div>
</body>
</html>

<?php
$conn->close();
?>
