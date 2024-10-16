<!-- /* Name - AMARASENA J D
IT no - IT23725874  */ -->

<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="./styles/donorStyles/donorAppoint.css">
       <title>DonorLink</title>
</head>
<body>
<?php include "header.php"; ?><br><br>
    <section class="container">

    <h1>Appointment Booking</h1>
      <form action="donor_appointment_submit.php" class="form" method="POST">

       <div class="column">
              <div class="quest">
                     <label for="type">Donation type</label>
                     <div class="select-box">       
                            <select id="type" name="type" required>
                                   <option value="Blood">Blood</option>
                                   <option value="Plasma">Plasma</option>
                                   <option value="Platelet">Platelet</option>
                            </select>
                     </div>
              </div>
              
              <div class="quest">
                     <label for="type">Donation center</label>
                     <div class="select-box">
                            <select id="center" name="center" required>
                                   <option value="Negombo">Negombo</option>
                                   <option value="Colombo">Colombo</option>
                                   <option value="gampaha">gampaha</option>
                            </select>
                     </div>
              </div>
       </div>

       <div class="column">
          <div class="input-box">
              <label for="date" type>Select donation date</label>
              <input type="date" name="date" id="date" required>
          </div>

          <div class="input-box">
              <label for="time" type>Pick a time slot</label>
              <input type="time" name="time" id="time" required>
          </div>
       </div>

       <div class="column">
          <div class="input-box">
              <label for="weight" type>Weight (kg)</label>
              <input type="text" name="weight" id="weight" required>
          </div>

          <div class="input-box">
              <label for="height" type>Height (cm)</label>
              <input type="text" name="height" id="height" required>
          </div>
       </div>

       <div class="input-box">
              <label for="concerns" type>If you are currently facing any health problem or seeking medical treatments mention it in here</label>
              <input type="text" name="concerns" id="concerns">
       </div>
       
        
        <button type="submit" name="booked" class="book">Book Appointment</button>
      </form>
    </section>
  </body>
</html>