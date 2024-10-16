<!--  Name - MODERAGE I U
IT no - IT23834606  -->

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eligibility Check-DonorLink</title>
        <link rel="stylesheet" href="stylesIshoda/styles.css">
        
    </head>
    <body class ="donorEl">
        <?php include "header.php"?><br><br>
        <h1 style=" font-size: 15px; font-family:geneve; color:black; margin-top: 50px;"><center>Blood Donation Eligibility Quiz</center></h1>

        <div id="eligibility_quiz">
            <div id="q1" class="question">
                <img src="imagesIshoda/elg1.png" width="180" class="img1"><br>
                <b>Are you 18-50 years old?</b><br>
                
                <button id="b2" onclick="checkEligibility(1, 'yes')">Yes</button>
                <button id="b2" onclick="checkEligibility(1, 'no')">No</button>
                <br><br>
                <p id="b3"><font color="red">Your single act of kindness can be someone's second chance at life.Give blood,save lives!</font><br>
                <a href="eligibility.php"  id="b3">Find out more about eligibility</a></p>
            </div>

            <div id="q2" class="question">
                <img src="imagesIshoda/elg2.png" width="180"><br>
                <b>Had a tatoo in last 4 months?</b><br>
                <button id="b2" onclick="checkEligibility(2, 'yes')">Yes</button>
                <button id="b2" onclick="checkEligibility(2, 'no')">No</button>
                <br><br>
                <p id="b3"><font color="red">You don't have to be a doctor to save lives;donating blood is a way</font><br>
                <p id="b3"><a href="eligibility.php"  id="b3">Find out more about eligibility</a></p>
            </div>

            <div id="q3" class="question">
                <img src="imagesIshoda/elg3.png" width="230"><br>
                <b>Are you pregnant or recently give birth?</b><br>
                <button id="b2" onclick="checkEligibility(3, 'yes')">Yes</button>
                <button id="b2" onclick="checkEligibility(3, 'no')">No</button>
                <br><br><br>
                <p id="b3"><p id="b3"><font color="red">The best feeling in the world is knowing that your donation can change a life</font><br>
                <a href="eligibility.php"  id="b3">Find out more about eligibility</a></p>
            </div>

            <div id="q4" class="question">
                <img src="imagesIshoda/elg4.png" width="180"><br>
                <b>Do you have a heart condition?</b><br>
                <button id="b2" onclick="checkEligibility(4, 'yes')">Yes</button>
                <button id="b2" onclick="checkEligibility(4, 'no')">No</button>
                <br><br><br>
                <p id="b3"><font color="red">Blood donation is a gift from the heart;share the love,share life.</font><br>
                <p id="b3"><a href="eligibility.php"  id="b3">Find out more about eligibility</a></p>
            </div>

            <div id="q5" class="question">
                <img src="imagesIshoda/elg5.png" width="250" ><br>
                <b>Have you injected recreatial drugs in the past 5 years?</b><br>
                <button id="b2" onclick="checkEligibility(5, 'yes')">Yes</button>
                <button id="b2" onclick="checkEligibility(5, 'no')">No</button>
                <br><br><br>
                <p id="b3"><font color="red">A single pint of blood can touch can countless lives.</font><br>
                <p id="b3"><a href="eligibility.php"  id="b3">Find out more about eligibility</a></p>
            </div>

            <div id="q6" class="question">
                <img src="imagesIshoda/elg6.png" width="180"><br>
                <b>Will you travel oversees 4 months before your donation?</b><br>
                <button id="b2" onclick="checkEligibility(6, 'yes')">Yes</button>
                <button id="b2" onclick="checkEligibility(6, 'no')">No</button>
                <br><br><br>
                <p id="b3"><font color="red">A few drops of your kindness can fill someone's world with hope</font><br>
                <p id="b3"><a href="eligibility.php"  id="b3">Find out more about eligibility</a></p>
            </div> 
            
        </div>
        <center>
        <div id ="para"></div>
        </center>
        <br><br><br><br><br><br>

        <script>
            document.getElementById("q1").style.display = 'block';

            function checkEligibility(qu,ans){
                if((qu === 1 && ans === 'no') || (qu === 2 && ans === 'yes') || (qu === 3 && ans === 'yes') || (qu === 4 && ans === 'yes') || (qu === 5 && ans === 'yes') || (qu === 6 && ans === 'yes')){
                    document.getElementById('para').innerHTML = "Sorry, you are currently not eligible to donate.<br><a href='index.php'>Return to the home page</a>";
                    document.getElementById("eligibility_quiz").style.display = 'none';
                    document.getElementById("para").style.display = 'block';
                    
                }
                else if(qu === 1 && ans === 'yes')
                {
                    document.getElementById("q1").style.display = 'none';
                    document.getElementById("q2").style.display = 'block';
                }
                else if(qu === 2 && ans === 'no')
                {
                    document.getElementById("q2").style.display = 'none';
                    document.getElementById("q3").style.display = 'block';
                }
                else if(qu === 3 && ans === 'no')
                {
                    document.getElementById("q3").style.display = 'none';
                    document.getElementById("q4").style.display = 'block';
                }
                else if(qu === 4 && ans === 'no')
                {
                    document.getElementById("q4").style.display = 'none';
                    document.getElementById("q5").style.display = 'block';
                }
                else if(qu === 5 && ans === 'no')
                {
                    document.getElementById("q5").style.display = 'none';
                    document.getElementById("q6").style.display = 'block';
                }
                else
                {
                    document.getElementById("q6").style.display = 'none';
                    document.getElementById("para").innerHTML = '<b>Great news, You can book a donation<br>Your donation today could be the miracle someone has waiting for. Thank you for being a hero!<br><font color="black"><a href="eligibility.php">Find out more from eligibility</a><br><a href="donor_login.html">Log in to continue your donation journey.</a></font></b>';
                    document.getElementById("para").style.display = 'block';
                }
            }
        </script>


        <?php include "footer.php"?>
    </body>
</html>



