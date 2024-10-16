// Name - Fernando Pulle N S
// IT no - IT23836440

//check password requirements and display the error mesaage if any
function checkPass(){

       const pass1 = document.getElementById("pass1").value;
       const pass2 = document.getElementById("pass2").value;
       const message = document.getElementById("errorMsg");
       message.innerHTML = "";

       const state1 = checkValidity(pass1, message);
       const state2 = checkEquality(pass1, pass2, message);

       if(state1 && state2){
              console.log("error free");
              message.style.display = "none";
              return true;
       }
       else{
              console.log("wrong");
              message.style.display = "block";
              message.style.backgroundColor = "blanchedalmond";
              return false;
       }
}

//check whether the password have minimum of 5 characters
function checkValidity(pass1, message){
       
       if(pass1.length < 5){
              
              message.innerHTML = "Password should have atleast 5 characters<br>";
              console.log("gwr");
              return false;
       }
       else{
              return true;
       }
}

//check password and re-entered passwords are the same
function checkEquality(pass1, pass2, message){
       
       if(pass1 != pass2){
              console.log("hrrr");
              message.innerHTML += "Password mismatch";
              return false;
       }
       else{
              return true;
       }
}


