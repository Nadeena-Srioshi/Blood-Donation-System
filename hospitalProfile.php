<!-- Name - Fernando Pulle N S
IT no - IT23836440 -->

<?php 
    SESSION_start();
    include_once "config.php" ;
?>

<?php
    if (isset($_SESSION['email'])) {
        
        $email = $_SESSION['email'];

        $sql = "SELECT hos_id, hos_name, hos_website, hos_type, hos_phone, hos_email, hos_address
                FROM hospital
                WHERE hos_email = '$email'";
                
        $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);

        //$_SESSION['id'] = $row['hos_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DonorLink</title>
    <link rel="stylesheet" href="./styles/recipientStyles/hospitalProfileStyle.css">
</head>
<body>
<?php include "header.php"; ?>

<div class="container">
    <div class='top-bar'>
        <?php echo "<span id='hname'> $row[hos_name]</span>";?>
          
        <div class="action-buttons">

            <a href="#" ><button class='order'>Order blood stock</button></a>
            <?php echo "<a href='hosDeleteAcc.php? id=$row[hos_id]' ><button class='delete'>Delete account</button></a> "?>

        </div>    
    </div>
<center>
    <div class='info-container'>
        <div class='infor-header'>
                    
            <span id="bla">Account Information</span>

                <?php
                echo "<a href='hosEditInfo.php? id=$row[hos_id] &name=$row[hos_name] &website=$row[hos_website] &type=$row[hos_type] &phone=$row[hos_phone] &email=$row[hos_email] &address=$row[hos_address]'><button>Edit details</button></a>
                    
        </div>";
                    //<script>console.log("blaaa")</script>
                            
                    echo "<div class='table-container'>
                    <table>
                    <tr><td>Hospital ID</td> <td>".$row['hos_id']."</td></tr>
                    <tr><td>Hospital Name</td> <td>".$row['hos_name']."</td></tr>
                    <tr><td>Website</td> <td>".$row['hos_website']."</td></tr>
                    <tr><td>Hospital Type</td> <td>".$row['hos_type']."</td></tr>
                    <tr><td>Telephone number</td> <td>".$row['hos_phone']."</td></tr>
                    <tr><td>Email address</td> <td>".$row['hos_email']."</td></tr>
                    <tr><td>Location</td> <td>".$row['hos_address']."</td></tr>";
        
                }
                else{
                    echo "<script>alert('data retrieving failed')</script>";
                }
            }
            else{
                header("location:index.php");
            }
            
            ?>
            </table>
        </div>
    </div>

    <div class="order-container">
                
    </div>
    </center>
</div>
<?php include "footer.php"?>
</body>
</html>





