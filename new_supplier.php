<?php
include("sidenav.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
    .new_account{
       margin-top: 25px;
      margin-bottom: 25px;
      /* margin-bottom: 25px; */
    position: absolute;
    left: 180px;
    width: 300px;
    height: 40px;
    }
    .new_account_name{
      /* padding-right: 115px; */
      margin-top: 25px;
      font-weight: bold;
      font-size: 25px;
      padding-left: 55px;
    }
    .new_account_balance{
      /* font-weight: bold; */
      margin-top: 25px;

      font-size: 25px;
        padding-left: 55px;
    }
.account{
  margin-top: 150px;
    background-color: lightgray;
    /* background-color: lightgray; */
    /* margin-top: 50px; */
    margin-left: 330px;
    margin-right: 330px;
    margin-bottom: 100px;
    width: 800px;
    height: 600px;
    position: absolute;
    top: 10px;
    left: 176px;
}
form{
  padding-top: 94px;
}
.new_account_buttons{
  /* margin-left: 330px;
    margin-top: 50px;
    width: 125px;
    height: 45px; */
    margin-top: 65px;
    margin-left: 240px;
}
.Create{
  width: 120px;
}
.new_account_heading{
  position: absolute;
    top: 20px;
    left: 20px;
}
  </style>

  <body>
    <!-- <center> -->
    <div class="account">
    <form class="" action="new_account_connection.php" method="post" >
<h2 class="new_account_heading">Create New Supplier</h2>
      <label for="" class="new_account_name">Name:</label>
      <input type="text" name="name" class="new_account"  placeholder="Name"><br>
      <label for="" class="new_account_name">Address:</label>
      <input type="text" name="address" class="new_account" placeholder="Address"><br>
      <label for="" class="new_account_name">Email:</label>
      <input type="email" name="email" class="new_account" placeholder="Email"><br>
      <!-- <label for="" class="new_account_balance"><b>Balance:</b></label>
      <input type="text" name="balance" class="new_account" placeholder="Customer has to pay"><br> -->
<div class="new_account_buttons">
  <button type="submit" class="btn btn-success Create" id="submit" name="submit" value="Submit">Create</button>
<a class="btn btn-primary " href="new_account_details.php" role="button">Supplier_details</a>
</div>

    </form>
    </div>
  <!-- </center> -->
  </body>
</html>
