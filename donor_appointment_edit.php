<!-- /* Name - AMARASENA J D
IT no - IT23725874  */ -->
<?php
       $Appointment_id = $_GET['id'];
       $Type = $_GET['Type'];
       $Center = $_GET['Center'];
       $Time = date('H:i', strtotime($_GET['Time']));
       $Date = date('Y-m-d', strtotime($_GET['Date']));
       $Concerns = $_GET['Concerns'];
       //echo "$Center";
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="./styles/donorStyles/donorAppoint.css">
       
       <title>DonorLink</title>
</head>
<body>
<?php //include "header.php"; ?>
    <section class="container">

    <h1>Appointment Booking</h1>
      <form action="donor_appointment_update.php" class="form" method="GET">

       <div class="column">

              <div class="input-box">
                     <label for="id" type>Appointment ID</label>
                     <input type="text" name="Appointment_ID" id="id" value="<?php echo "$Appointment_id" ?>" readonly>
              </div>

              <div class="quest">
                     <label for="type">Donation type</label>
                     <div class="select-box">       
                            <select id="type" name="Type" required>
                                   <option value="Blood" <?php if($Type == "Blood") echo 'selected'; ?>>Blood</option>
                                   <option value="Plasma" <?php if($Type == "Plasma") echo 'selected'; ?>>Plasma</option>
                                   <option value="Platelet" <?php if($Type == "Platelet") echo 'selected'; ?>>Platelet</option>
                            </select>
                     </div>
              </div>
              
              <div class="quest">
                     <label for="center">Donation center</label>
                     <div class="select-box">
                            <select id="center" name="Center" required>
                                   <option value="Negombo" <?php if($Center == "Negombo") echo 'selected'; ?>>Negombo</option>
                                   <option value="Colombo" <?php if($Center == "Colombo") echo 'selected'; ?>>Colombo</option>
                                   <option value="gampaha" <?php if($Center == "gampaha") echo 'selected'; ?>>gampaha</option>
                            </select>
                     </div>
              </div>
       </div>

       <div class="column">
          <div class="input-box">
              <label for="date" type>Select donation date</label>
              <input type="date" name="Date" id="date" value="<?php echo $Date ?>" required>
          </div>

          <div class="input-box">
              <label for="time" type>Pick a time slot</label>
              <input type="time" name="Time" id="time" value="<?php echo $Time ?>" required>
          </div>
       </div>

       <div class="input-box">
              <label for="concerns" type>If you are currently facing any health problem or seeking medical treatments mention it in here</label>
              <input type="text" name="Concerns" id="concerns" value="<?php echo "$Concerns" ?>">
       </div>
        
       <button type="submit" name="booked" class="book">Update</button>
      </form>
    </section>
  </body>
</html>