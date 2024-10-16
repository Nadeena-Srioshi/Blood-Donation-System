<!-- /* Name - AMARASENA J D
IT no - IT23725874  */ -->

<?php
       include "config.php";
       
?>


<link rel="stylesheet" href="./styles/donorStyles/donorAppoint.css">
<center>
<table class="table" border="2px">
       <tr>
              <th>Appointment_id</th>
              <th>Type</th>
              <th>Center</th>
              <th>Date</th>
              <th>Time</th>
              <th>Concerns</th>
              <th>Edit</th>
              <th>Delete</th>
       </tr>

       <?php
       $id = $_SESSION['U_ID'];

       $sql = "SELECT Appointment_id, Type, Center, Date, Time, Concerns FROM  donor_appointment WHERE donor_id = $id";
       $result = $conn->query($sql);
       //echo "$id";
       if($result->num_rows>0){
              while($row=$result->fetch_assoc()){

                  echo"<tr><td>".$row["Appointment_id"]."</td><td>".$row["Type"]."</td><td>".$row["Center"]."</td><td>".$row["Date"]."</td><td>".$row["Time"]."</td><td>".$row["Concerns"]."</td>";
                  
                  echo "<td><a href='donor_appointment_edit.php ? id=$row[Appointment_id] &Type=$row[Type] &Center=$row[Center] &Date=$row[Date] &Time=$row[Time] &Concerns=$row[Concerns]'><button class='edit'>Edit</button></a></td>";
                  
                  echo "<td><a href='donor_appointment_delete.php ? id=$row[Appointment_id]'><button class='del'>Delete</button></a></td></tr>";
                  
              }
          }

       ?>
       
</table>
</center>
<?php

?>