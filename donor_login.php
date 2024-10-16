<!--  Name - MODERAGE I U
IT no - IT23834606  -->

<?php
    session_start();

    require 'donor_config.php';


    if(isset($_POST["email"]) && isset($_POST["pswrd"]))
    {
        // Capture the form data
        $email = $_POST["email"];
        $password = $_POST["pswrd"];

        $sql = "SELECT * FROM donor WHERE dEmail = '$email' AND dPassword = '$password'";
        $result = $conn->query($sql);
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // If valid user, set the session
            $_SESSION['U_ID'] = $row['donor_id'];
            $_SESSION["email"] = $email;
            $_SESSION['user'] = 'donor';

            // Redirect to the home page
            header("Location: donor_profile.php");
            exit(); // Stop script execution after redirect

         } 
        else {
            echo "<p>Invalid username or password! Please <a href='donor_login.php'>try again</a>.</p>";
        }
    }
    else
    {
        echo "<p>Please fill in both email and password fields.</p>";
    }

    $conn->close();

?>
