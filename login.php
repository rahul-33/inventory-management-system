<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet">
  </head>
  <style media="screen">
  #first{
    background-color: lightgray;
    /* background-color: lightgray; */
    margin-top: 50px;
    margin-left: 330px;
    margin-right: 330px;
    margin-bottom: 100px;
    width: 800px;
    height: 600px;
  }
label{
  font-family: "Poppins", sans-serif;
  font-weight: bold;
  font-size: 30px;
  margin-top: 30px;
}
input{
  padding: 10px 100px;
}
input::placeholder {
    font: 25px sans-serif;
    text-align: center;
}
button{
  /* padding-top: 15px;
  padding-bottom: 15px; */
  /* position: relative; */
  /* bottom: 0px; */
  width: 150px;
  height: 50px;
  margin-top: 80px;
}
#mainhead{
  font-style: italic;
  font-family: sans-serif;
  font-size: 50px;
  margin-bottom: 75px;
  padding-top: 30px;
}
.form-input{
  /* padding-top: 30px; */
  position: relative;
  right: 110px;
}
#name,#pass{
  margin-top: 5px;
}
.password{
  /* padding-top: 35px; */
}
.warn{
color: darkred;
}
  </style>
  <body>
    <center>
    <div id="first">
<!-- <img src="1.png" alt=""> -->
<h3 id="mainhead" >Dwarkapuri Textiles PVT LTD</h3>
 <form id="forminput" action = "authentication.php" onsubmit="return validation()" method="post">
  <div class="username">
    <label for="username" class="form-input">Username :</label><br>
    <input type="text" class="" id="name" name="username" placeholder="User name" maxlength="50" ><br>
    <span id="username" class="warn"></span>
  </div>
  <div class="password">
    <label for="password" class="form-input">Password :</label><br>
    <input type="text" class="" id="pass" name="password" placeholder="Password" maxlength="50" ><br>
    <span id="password" class="warn"></span>
  </div>

  <button type="submit" class="btn btn-primary" id="submit" name="submit" value="Submit">Submit</button>

</form>
<script >
  function validation(){
    let username=document.getElementById("name").value;
    let password=document.getElementById("pass").value;
    if (username==""){
      document.getElementById("username").innerHTML="please fill the userid";
      return false;
    }
    else {
      document.getElementById("username").innerHTML="";
    }
    if (password==""){
      document.getElementById("password").innerHTML="Enter password";
      return false;
    }
    else if(password.search(/[a-z]/)==-1){
      document.getElementById("password").innerHTML="must contain one lowercase letter";
      return false;
    }
    else if(password.search(/[0-9]/)==-1){
      document.getElementById("password").innerHTML="must contain number";
      return false;
    }
    else if(password.search(/[A-Z]/)==-1){
      document.getElementById("password").innerHTML="must contain one uppercase letter";
      return false;
    }
    else if(password.search(/[!\@\#\$\%\^\&\*\(\)\_\-\+\=]/)== -1){
       document.getElementById("password").innerHTML= "password must cointain one character.";
     return false;}
    else if ((password.length<=8) &&(password.length>=30) ) {
      document.getElementById("password").innerHTML="password must be more than 8 characters and less than 30 characters.";
      return false;
    }
    else {
      document.getElementById("password").innerHTML="";
    }

  }
</script>
  </div>
</center>
  </body>
</html>
