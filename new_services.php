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
.new_product_dropdown{
  background-color:  #e9ecef;
  position: absolute;
      top: 200px;
      left: 700px;
      padding: 20px;
      width: 600px;
}
.new_product_items{
  padding-right: 200px;
  position: absolute;
    left: 135px;
}
.new_product_item{
  margin-top: 25px;
}
.new_account_buttons{
  /* margin-left: 330px;
    margin-top: 50px;
    width: 125px;
    height: 45px; */
    margin-top: 65px;
    margin-left: 170px;
}
.Create{
  width: 120px;
}
  </style>
  <body>
    <div class="new_product_dropdown">
      <form class="" action="new_services_connection.php" method="post">


  <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Product/Services
  </button><br>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="new_product.php">Products</a>
    <a class="dropdown-item" href="new_services.php">Services</a> -->
    <!-- <a class="dropdown-item" href="#">Something else here</a> -->
<h1>Services</h1>
  <!-- <label class="new_product_item "for=""><b>BarCode</b></label>
  <input class="new_product_items new_product_item"type="text" name="" value=""><br> -->
  <label class="new_product_item "for=""><b>Product Name</b></label>
  <input class="new_product_items new_product_item"type="text" name="product_name" ><br>
  <label class="new_product_item "for=""><b>Purchase Price</b></label>
  <input class="new_product_items new_product_item"type="text" name="sales_price" ><br>

  <!-- <label class="new_product_item "for=""><b>Sale Price</b></label>
  <input class="new_product_items new_product_item"type="text" name="" value=""><br> -->
  <!-- <label class="new_product_item "for=""><b>Stock</b></label>
  <input class="new_product_items new_product_item"type="text" name="" value=""><br> -->
  <div class="new_account_buttons">
    <button type="submit" class="btn btn-success Create" id="submit" name="submit" value="submit">Create</button>
  <a class="btn btn-primary " href="new_services_details.php" role="button">Back_to-LIST</a>
  </div>
  </form>
</div>


  </body>
</html>
