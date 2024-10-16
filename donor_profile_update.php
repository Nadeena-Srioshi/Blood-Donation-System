<!--  Name - MODERAGE I U
IT no - IT23834606  -->

<?php

    session_start();

    require 'donor_config.php';
    // Check if the form is submitted
    if (isset($_GET['update'])) {
        echo "Inside form submission!";
        // Your update logic here...
    } else {
        echo "Form not submitted!";
    }
    
    if(isset($_GET['update']))
    {
        $id = $_GET['id'];
        $name = $_GET["name"];
        $dDob = $_GET["dob"];
        $nic = $_GET["nic"];
        $phone = $_GET["Mobile"];
        $email = $_GET["email"];
        $address = $_GET["address"];
        
    

        $sql = "UPDATE donor SET 
            dName='$name',
            dob='$dDob', 
            dNic = '$nic',  
            dPhone = '$phone', 
            dEmail = '$email', 
            dAddress = '$address' 
        WHERE donor_Id = '$id'";
        
        $result = $conn->query($sql);

        if($result)
        {
            echo "<script>alert('Record Updated!!')
            window.location.href = 'donor_profile.php';</script>";
            
        }
        else 
        {
            echo "Error updating record: " . $conn->error;
        }
    }   
    else
    {
        echo "Not updated".$conn->error;
    }
    

    $conn->close();
?>
<?php

/*print_r($_GET);

    // Check if the form is submitted
    if (isset($_GET['update'])) {
        echo "Inside form submission!";
        // Your update logic here...
    } else {
        echo "Form not submitted!";
    }
    
    if(isset($_GET['update'])){
       echo"hii broo";
       $id = $_GET['id'];
       $name =$_GET['name'];
       $dDob=$_GET['dob'];
       $phone = $_GET['Mobile'];
       $email=$_GET['email'];
       $address=$_GET['address'];
       
       
       $sql = "UPDATE donor SET
              dName = '$name', 
              dob = '$dDob', 
              dphone = '$phone', 
              demail = '$email', 
              dAddress = '$address'
              WHERE donor_id = '$id'";
       $result = mysqli_query($conn,$sql);
        
       if($result){
              
              echo "<script>alert('Record Updated!!')
              window.location.href = 'profile_donor.php';</script>";
       }else{
              echo "<script>alert('Error in Update')</script>";
       }
    }
    else {
        echo "gvrfsd";
    }
//hos_type = '$phone', 
    mysqli_close($conn);

*/
?>