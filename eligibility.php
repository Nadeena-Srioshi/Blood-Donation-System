<!--  Name - MODERAGE I U
IT no - IT23834606  -->
<!DOCTYPE html>
    <head>
        <title>Eligibility Check-DonorLink</title>
        <link rel="stylesheet" href="stylesIshoda/styles.css">
        <script src="jsIshoda/eligibility.js"></script>
    </head>
    <body class="donorEl">
    <?php include "header.php"; ?>
        <h1 style="color:black; font-size: 40px; font-family: Courier, monospace;">Who can donate blood</h1>
        <br>
        
                <p><ul id="po1">
                        <h3>To donate blood you will need to:</h3><br>
                        <li id="li1">be generally fit and well</li>
                        <li id="li1">be aged between 17 and 65</li>
                        <li id="li1">weight between 7 stone 12 lbs (50kg) and 25 stone (158kg)</li>
                        <li id="li1">have suitable veins (we will check these before you donate)</li>
                        <li id="li1">meet all donor eligibility criteria (we will check this with you before you donate)</li>
                    </ul>

            
            </p><br>

            
                <p>
                    <ul id="po1">
                        <h3>You can't donate blood if you:</h3><br>
                        <li id="li1">have had most types of cancer</li>
                        <li id="li1">have some heart conditions</li>
                        <li id="li1">have received blood, platelets, plasma or any other blood products after 1 January 1980</li>
                        <li id="li1">have had an organ transplant</li>
                        <li id="li1">are a hepatitis B carrier</li>
                        <li id="li1">are a hepatitis C carrier</li>
                        <li id="li1">have injected non-prescribed drugs including body-building and injectable tanning agents. You may be able to give if a doctor prescribed the drugs</li>
                    </ul>
                </p><br>
   
        <div class="condition">
            <h3>Medications and Vaccinations</h3><br>
            <a onclick="requirements('condition1')" class="cl1">+Anibiotics</a><br><br>
            <p id="elPara1" class="cl2"></p><br>
            <a onclick="requirements('condition2')" class="cl1">+Birth Control</a><br><br>
            <p id="elPara2" class="cl2"></p><br>
            <a onclick="requirements('condition3')" class="cl1">+Insulin</a><br><br>
            <p id="elPara3" class="cl2"></p><br>
            <br>
            <h3>Personal Information</h3><br>
            <a onclick="requirements('condition4')" class="cl1">+Age</a><br><br>
            <p id="elPara4" class="cl2"></p><br>
            <a onclick="requirements('condition5')" class="cl1">+Tattoo</a><br><br>
            <p id="elPara5" class="cl2"></p><br>
            <a onclick="requirements('condition6')" class="cl1">+Piercing (ears, body), Electrolysis</a><br><br>
            <p id="elPara6" class="cl2"></p><br>

            <a href="eligibility_quiz.php">
                <button class="b1">Check your eligibility</button>
            </a><br><br>
        </div>

        <br>
    <?php include "footer.php"?>
        
    </body>

    
    </html>
