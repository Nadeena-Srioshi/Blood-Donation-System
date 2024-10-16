<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Entry Form</title>
    <link rel="stylesheet" href="styles/HCPForm.css">
    <script>
        function validateForm() {
            const nic = document.forms["donationForm"]["nic"].value;
            const donor = document.forms["donationForm"]["donor"].value;
            const donationDate = document.forms["donationForm"]["donation_date"].value;
            const sampleId = document.forms["donationForm"]["sample_id"].value;
            const volume = document.forms["donationForm"]["volume"].value;

            if (nic === "" || donor === "" || donationDate === "" || sampleId === "" || volume === "") {
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
        <h1>Blood Donation Entry Form</h1>
        
        <form name="donationForm" action="HCPInsertEntry.php" method="post" onsubmit="return validateForm()">
            <label for="nic">NIC:</label><br>
            <input type="text" name="nic"><br><br>
            <label for="donor">Donor:</label><br>
            <input type="text" name="donor"><br><br>
            <label for="donation_date">Donation Date:</label>
            <input type="date" name="donation_date"><br><br>
            <label for="blood_type">Blood Type:</label>
                <select id="blood_type" name="blood_type">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                </select><br><br>
            <label for="sample_id">Sample ID:</label>
            <input type="text" name="sample_id"><br><br>
            <label for="volume">Volume (ml):</label>
            <input type="text" name="volume"><br>
            <center>
            <input type="submit" id="submitBtn" value="Save">
            </center>
        </form>
    </div>
</body>
</html>
