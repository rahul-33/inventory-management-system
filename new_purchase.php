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
  table, th, td {
border: 1px solid black;
/* text-align: center; */

}
.table{
background-color: #e9ecef;
position: absolute;
   width: 1375px;
    /* height: 650px; */
  top: 250px;
  left: 286px;

}
.new_sales_form{
  background-color:  #e9ecef;
  position: absolute;
    top: 170px;
    left: 290px;
    height: 60px;
    width: 1375px;
    padding-top: 15px;

}
.new_sales_form_labels{
  padding-left: 40px;
}
.new_sales_button{
  position: absolute;
    top: 375px;
    left: 350px;
    width: 125px;
}
.new_sales_heading{
  position: absolute;
    top: 100px;
    left: 850px;
}
.new_sales_payment_details{
    background-color:  #e9ecef;
    position: absolute;
    right: 65px;
    /* bottom: -332px; */
    top: 550px;
    width: 500px;
    height: 300px;
    padding-left: 20px;
    padding-top: 20px;
}
.footer{
  padding-bottom: 100px;
}
.new_sales_input{
  width: 300px;
    height: 35px;
}
.new_sales_input1{
  width: 280px;
    height: 35px;

}
  </style>
  <body>
    <h2 class="new_sales_heading">Purchase <b>Order</b></h2>
    <div class="new_sales_form">

      <label for="" class="new_sales_form_labels">Customer Name:</label>
      <input class="new_sales_input" type="text" name="" value="" placeholder="Type Customer Name">
      <label for="" class="new_sales_form_labels">Address:</label>
      <input class="new_sales_input" type="text" name="" value="">
     &nbsp or<a href="new_account.php"> add new Customer</a>
    </div>
    <table class=" table table-borderless table-striped table-earning" >
  <thead>
    <tr>
      <th scope="col" colspan="1" >#</th>
        <th scope="col" colspan="1">Product Name	</th>
      <th scope="col"colspan="1">Sale Price</th>
       <!-- <th scope="col"colspan="2">Phone</th> -->
      <th scope="col"colspan="1">Quantity	</th>
      <th scope="col"colspan="1">Item Total	</th>
      <!-- <th scope="col"colspan="2">Action</th> -->
    </tr>
  </thead>
  <?php
  // $query = "SELECT id,name,email,balance FROM cust_details";
  //   // FETCHING DATA FROM DATABASE
  //   $result = mysqli_query($conn, $query);


        // OUTPUT DATA OF EACH ROW
$cnt=1;
        while($cnt <2){

   ?>
  <tr>
    <td><?php echo $cnt; ?></td>
    <td>  <input class="new_sales_input1" type="text" name="" value="" placeholder="Type Product Name"></td>
    <td>  <input class="new_sales_input1" type="text" name="" value=""></td>
    <td>  <input class="new_sales_input1" type="text" name="" value=""></td>
    <td>  <input class="new_sales_input1" type="text" name="" value=""></td>
  </tr>

  <?php
  $cnt=$cnt+1;
  }
   ?>
    </table>
    <div class="new_sales_button">
  <button class="btn btn-primary" type="button" name="button">+ New Row</button>
    </div>
<div class="new_sales_payment_details">
  <form class="" action="index.html" method="post">
    <label for="">Order Total(1 pack, 0 piece)</label>
    <input type="text" name="" value=""><br>
    <label for="">Order Discount</label>
    <input type="text" name="" value=""><br>
    <label for=""><b>Sub Total</b></label>
    <input type="text" name="" value=""><br>
    <label for="">Prev. Balance</label>
    <input type="text" name="" value=""><br>
    <label for=""><b>Total</b></label>
    <input type="text" name="" value=""><br>
    <label for="">Paid</label>
    <input type="text" name="" value=""><br>
    <label for="">Balance</label>
    <input type="text" name="" value=""><br>
  </form>
</div>
    <!-- <input type="text" name="" value=""> -->
  </body>
</html>
