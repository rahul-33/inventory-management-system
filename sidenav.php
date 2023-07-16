<?php
    // if (isset($_POST['New Visitor'])) {
    //     header("Location: new visitor.php");
    //     exit; // Make sure to exit after the redirect
    // }
    // elseif (isset($_POST['visitor b/w dates'])) {
    //     header("Location: visitor between dates.php");
    //     exit; // Make sure to exit after the redirect
    // }
    // elseif (isset($_POST['Manage visitor'])) {
    //     header("Location: manage visitor.php");
    //     exit; // Make sure to exit after the redirect
    // }
    // else (isset($_POST['Dashboard'])) {
    //     header("Location: sidenav.php");
    //     exit; // Make sure to exit after the redirect
    // }
    // else {
    //   die();
    // }
    ?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script><script src="https://kit.fontawesome.com/8d978795f4.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/8d978795f4.js" crossorigin="anonymous"></script>
  </head>
  <style media="screen">
    #search{
      position: absolute;
    left: 980px;
    /* bottom: 85px; */
    margin-left: 15px;
    height: 50px;
    width: 130px;
}

    .form-inline{
      padding-right: 100px;
    padding-top: 10px;
    margin-right: 575px;
    }
    #place{
      height: 55px;
    width: 710px;
    padding-right: 25px;
    }
    .navbar-brand{
      font-size: 36px;
      padding-left: 30px;
    }

    .sidebar{
      width: 250px;
    height: 1025px;
      background-color: #e9ecef;
      margin-bottom: 5px;
      padding-left: 20px;
    }
    #sidebar-buttons{
      margin-top: 5px;
      margin-bottom: 5px;
      color: white;
    }
    .buttons{
      width: 150px;
      height: 50px;
      margin-left: 15px;
color: blue;
font-size: 18px;
border: 0px;
text-align: left;
/* background-color: #11009e; */
/* text-color:white; */
    }
    /* .icons{
      width: 50px;
      height: 0px;
    } */
    /* .icons{
      margin-top: 50px;
margin-bottom: 5px;

    } */
.dropdown{
  /* width: 250px; */
  /* position: absolute; */
    top: 9px;
  width: 175px;
    height: 70px;
    position: absolute;
  left: 1450px;
  bottom: 60px;
}
.button1{
  margin-left: 10px;
  margin-bottom: 10px;
}
.button2{
   width: 175px;
  height: 70px;
  /* margin-top: 10px; */
  /* position: absolute;
    top: 50px; */
}
.navbar{
  padding-bottom: 18px;
}


   #dropdown-menu{
    width: 250px;
    position: absolute;
    top:72px;
    border: 0px;
      background-color:#e9ecef;
  }
#Logout{
margin-left: 10px;
}
.logout-button{
  margin-left: 5px;
}
.footer{
  padding-bottom: 30px;
}
.dropdown-1{
  margin-top: 10px;
  margin-bottom: 10px;
}
/* .no-print {
            display: block;
        } */

        @media print {
            .no-print {
                display: none;
            }
        }
  </style>
  <body>



    <nav class="navbar navbar-light bg-light justify-content-between">

  <a class="navbar-brand">Dp Textiles</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" id="place"type="search" aria-label="Search" placeholder="search by names & mobile number" maxlength="50">
    <button class="btn btn-outline-success my-2 my-sm-0" id=search type="submit">Search</button>
  </form>
  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle button2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fa-solid fa-user fa-xl"></i>
      <h3>Admin</h3>

    </button>
    <div class="dropdown-menu" id="dropdown-menu" aria-labelledby="dropdownMenuButton">

        <i class="fa-solid fa-user fa-xl"></i>
        <h3>Admin</h3>


      <div class="dropdown-divider"></div>



      <i class="fa-solid fa-user fa-xl"></i>
      <button type="button" name="button" class="btn btn-primary  button1" >Admin Profile</button><br>
    <i class="fa-solid fa-gears fa-xl"></i>
      <button type="button" name="button" class="btn btn-primary button1"  >Change Password</button>
      <div class="dropdown-divider"></div>

  <button type="submit" class="btn btn-danger logout-button" name="button">Logout<i id="Logout" class="fa-solid fa-power-off fa-xl"></i><a href="logout.php"></a>
  </button>

    </div>

  </div>
</nav>

<div class="sidebar">
    <div class="button">
        <i class="fa-solid fa-gauge-high fa-xl icons no-print" style="color: #11009e;"></i>
      <!-- <button type="submit" class="btn btn-outline-secondary btn-primary buttons" name="Dashboard"><a href="sidenav.php">Dashboard</a></button><br> -->
<button type="submit" class="btn btn-outline-secondary btn-primary buttons no-print" name="New Visitor" id="New Visitor"><a href="">Dashboard</a></button><br>
        <!-- <i class="fa-sharp fa-solid fa-person-walking fa-xl icons"  style="color: #4942e4;"></i> -->
    <i class="fa-solid fa-list fa-xl no-print" style="color: #4942e4;"></i>
      <button type="submit" class="btn btn-outline-secondary btn-primary buttons no-print" name="New Visitor" ><a href="summary.php">Summary</a></button><br>

          <button type="button" class="btn btn-outline-secondary btn-primary buttons no-print" name="Manage visitor" ><b><u>Sales</u></b></a></button><br>
<i class="fa-solid fa-file-arrow-up fa-xl no-print" style="color: #4942e4;"></i>
      <button type="submit" class="btn btn-outline-secondary btn-primary buttons no-print" name="Manage visitor" ><a href="new_sales.php">New Sale</a></button><br>
        <i class="fa-solid fa-magnifying-glass fa-xl no-print" style="color: #4942e4;"></i>
    <button type="button" class="btn btn-outline-secondary btn-primary buttons no-print" name="visitor b/w dates" ><a href="">Sales history</a></button><br>
    <i class="fa-solid fa-file-invoice fa-xl no-print" style="color: #4942e4;"></i>
    <button type="button" class="btn btn-outline-secondary btn-primary buttons no-print" name="visitor b/w dates" ><a href="sales_view_ledger.php">Ledger</a></button>
    <button type="button" class="btn btn-outline-secondary btn-primary buttons no-print" name="Manage visitor" ><b><u>Purchases</u></b></a></button><br>
<i class="fa-solid fa-file-arrow-down fa-xl no-print" style="color: #4942e4;"></i>
<button type="submit" class="btn btn-outline-secondary btn-primary buttons no-print" name="Manage visitor" ><a href="new_purchase.php">New Purchase</a></button><br>
  <i class="fa-solid fa-magnifying-glass fa-xl no-print" style="color: #4942e4;"></i>
<button type="button" class="btn btn-outline-secondary btn-primary buttons no-print" name="visitor b/w dates" style="color: #4942e4;"><a href="">Purchase history</a></button><br>
<i class="fa-solid fa-file-invoice fa-xl no-print" style="color: #4942e4;"></i>
<button type="button" class="btn btn-outline-secondary btn-primary buttons no-print" name="visitor b/w dates" ><a href="purchase_view_ledger.php">Ledger</a></button>
<button type="button" class="btn btn-outline-secondary btn-primary buttons no-print" name="Manage visitor" ><b><u>Products/Services</u></b></a></button><br>
<div class="dropdown-1">
  <button class="btn dropdown-toggle btn-primary no-print" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Products/Services
  </button>
  <div class="dropdown-menu no-print " aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item " href="new_product.php">Products</a>
    <a class="dropdown-item " href="new_services.php">Services</a>
    <!-- <a class="dropdown-item" href="#">Something else here</a> -->
  </div>
</div>
 <!-- <button type="button" class="btn btn-outline-secondary btn-primary buttons" name="Manage visitor" ><b><u>Products</u></b></a></button><br>
<i class="fa-solid fa-file fa-xl" style="color: #4942e4;"></i>
<button type="submit" class="btn btn-outline-secondary btn-primary buttons" name="Manage visitor" ><a href="manage visitors.php">New Product</a></button><br> -->
<i class="fa-solid fa-gift fa-xl no-print" style="color: #4942e4;"></i>
<div class="dropdown-1">
  <button class="btn dropdown-toggle btn-primary no-print" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Products/Services List
  </button>
  <div class="dropdown-menu no-print " aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item " href="new_product_details.php">Products List</a>
    <a class="dropdown-item " href="new_services_details.php">Services List</a>
    <!-- <a class="dropdown-item" href="#">Something else here</a> -->
  </div>
</div>
<!-- <button type="button" class="btn btn-outline-secondary btn-primary buttons no-print" name="visitor b/w dates" ><a href="new_product_details.php">Products/Services List</a></button> -->
<button type="button" class="btn btn-outline-secondary btn-primary buttons no-print" name="Manage visitor" ><b><u>Customers</u></b></a></button><br>
<i class="fa-solid fa-file fa-xl no-print" style="color: #4942e4;"></i>
<button type="submit" class="btn btn-outline-secondary btn-primary buttons no-print" name="Manage visitor" ><a href="new_account.php">New Customer</a></button><br>
<i class="fa-solid fa-magnifying-glass fa-xl no-print" style="color: #4942e4;"></i>
<button type="button" class="btn btn-outline-secondary btn-primary buttons no-print" name="visitor b/w dates" ><a href="new_account_details.php">Customer List</a></button>
<button type="button" class="btn btn-outline-secondary btn-primary buttons no-print" name="Manage visitor" ><b><u>Suppliers</u></b></a></button><br>
<i class="fa-solid fa-file fa-xl no-print" style="color: #4942e4;"></i>
<button type="submit" class="btn btn-outline-secondary btn-primary buttons no-print" name="Manage visitor" ><a href="new_supplier.php">New Supplier</a></button><br>
<i class="fa-solid fa-magnifying-glass fa-xl no-print" style="color: #4942e4;"></i>
<button type="button" class="btn btn-outline-secondary btn-primary buttons no-print" name="visitor b/w dates" ><a href="">Supplier List</a></button>
    </div>
  </div>

<a href="#"></a>
<div class="footer">

</div>


  </body>
</html>
