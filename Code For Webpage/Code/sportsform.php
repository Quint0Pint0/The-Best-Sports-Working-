<!DOCTYPE html>
<html>
  <head>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
    <link rel="stylesheet" href="Mainpage.css">
    <meta charset="utf-8">
    <meta name="keywords" content="Sports">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
      .formbutton:hover {
        cursor: pointer;
      }

      input.checkbox {
        width: 25px;
        height: 25px;
      }

      .checkbox {
        font-size: 25px;
        font-family: arial;
        text-shadow: 0 0 10px yellow;
      }

      body {

        background-image: linear-gradient(to right, green, red);
       
      }
  </style>
  </head>
<body>
 
  
  <!-- Button to go back to Home Page-->    
   <div class="navbar">
    <a class="NOhover" href="Navigation Menu" style="font-size: 22px; font-family:fantasy; letter-spacing:1px">Navigation Bar</a>
    <a href="Main.html">Home</a>
  </div>
  </nav>
  
  <div id="endform">
  <form method="POST" action="../PHP and Data/index.php" style="font-family:cursive">
    <p class="p-form" style="font-size: 20px; text-decoration: underline; text-decoration-color: black;">Did you like this website? Select <span style="color:#00ff2a; font-size: 22px; text-shadow: 0 0 10px black; text-decoration: underline; text-decoration-thickness: 3px; text-decoration-color: black;"> Yes </span> or <span style="color:red; font-size: 22px; text-shadow: 0 0 10px black; text-decoration: underline; text-decoration-thickness: 3px; text-decoration-color: black;"> No </span>.</p>
    <label style="color:#00ff2a; font-size: larger; border-style: solid; border-radius: 5px; background-color:black" for="Yes"><b>Yes, it was a great webpage</b></label>
    <input class="formbutton" type="radio" id="Yes" value="1" name="button" required>
    <br><br>
    <label style="color:#ff0000; font-size: larger; border-style: solid; border-radius: 5px; background-color:black" for="No"><b>No, it was not a good webpage</b></label>
    <input class="formbutton" type="radio" value="1" id="No" name="button">
    <br>
    <p style="font-size: 20px; text-shadow: 0px 0px 11px red; color: white;">What sport do you like? Vote for what the best sport is and submit it to the poll. Fill out the information to submit your vote!</p>
    <label for="fname" style="font-size: 25px; ">First Name</label> <br>
    <input style="background-color: skyblue; font-size: 21px; " type="text" id="fname" name="fname" required><br>
    <label for="lname" style="font-size: 25px;">Last Name</label> <br>
    <input style="background-color:skyblue; font-size: 21px;" type="text" id="lname" name="lname" required><br>
    <br>
    <div style="font-size: larger;">
        <label for="football" class="checkbox"><b>Football</b></label>
        <input class="formbutton " type="checkbox"  name="sport[]" value="Football">
        <br>
        <label for="basketball" class="checkbox"><b>Basketball</b></label>
        <input class="formbutton " type="checkbox"  name="sport[]" value="Basketball">
        <br>
        <label for="soccer" class="checkbox"><b>Soccer</b></label>
        <input class="formbutton " type="checkbox" name="sport[]" value="Soccer">
        <br>
    </div>
    <p class="p-form" style="color:#f5ff00"><strong>Have more? Tell us them!</strong></p>
    <textarea id="Area" name="Custom Sport!" rows="2" cols="50"></textarea>
    <br>
    <input type="submit" value="Vote!" id="submit" style="background-color: rgb(0, 255, 86); border:dotted; border-radius: 100px">
</form>

    
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
  
     </div>
     
   
    
  </body>
  
</html> 