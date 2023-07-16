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
      left: 800px;
      padding: 20px;
      width: 200px;
}
.new_product_items{
  padding-right: 200px;
  position: absolute;
    left: 135px;
}
.new_product_item{
  margin-top: 25px;
}

  </style>
  <body>

    <div class="new_product_dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Product/Services
  </button><br>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="new_product.php">Products</a>
    <a class="dropdown-item" href="new_services.php">Services</a>
    <!-- <a class="dropdown-item" href="#">Something else here</a> -->
  </div>
  <!-- <label class="new_product_item "for=""><b>BarCode</b></label>
  <input class="new_product_items new_product_item"type="text" name="" value=""><br>
  <label class="new_product_item "for=""><b>Product Name</b></label>
  <input class="new_product_items new_product_item"type="text" name="" value=""><br>
  <label class="new_product_item "for=""><b>Purchase Price</b></label>
  <input class="new_product_items new_product_item"type="text" name="" value=""><br>
  <label class="new_product_item "for=""><b>Sale Price</b></label>
  <input class="new_product_items new_product_item"type="text" name="" value=""><br>
  <label class="new_product_item "for=""><b>Stock</b></label>
  <input class="new_product_items new_product_item"type="text" name="" value=""><br> -->
</div>
  </body>
</html>
