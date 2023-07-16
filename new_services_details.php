<?php
include('connection.php');
include("sidenav.php");
 ?>
 <!-- <//?php
// Query to fetch the purchase data
$sql = "SELECT product_name, purchase_price,sale_price FROM product_details";

$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    $total_purchase_price  = 0;
      $total_sales_price=0;

    // Iterate through the rows and calculate the total purchase price
    while ($row2 = $result->fetch_assoc()) {
        $total_purchase_price += $row2["purchase_price"];
        $total_sales_price += $row2["sale_price"];
    }
    // while ($row2 = $result->fetch_assoc()) {
    //
    // }
    // Display the total purchase price
    // echo "Total Purchase Price: " . $totalPrice;
// } else {
//     echo "No purchases found.";
 }

// Close the database connection
//$conn->close();
?> -->


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <script>
        function printContent() {
            // Hide elements not to be printed
            var elementsToHide = document.getElementsByClassName('no-print');
            for (var i = 0; i < elementsToHide.length; i++) {
                elementsToHide[i].style.display = 'none';
            }

            // Print the specific part
            window.print();

            // Restore the hidden elements after printing
            for (var i = 0; i < elementsToHide.length; i++) {
                elementsToHide[i].style.display = '';
            }
        }
    </script>
  <style media="screen">
  table, th, td {
border: 1px solid black;
/* text-align: center; */

}
.table{
background-color: #e9ecef;
position: absolute;
  width: 1375px;
  top: 160px;
  left: 286px;
  height: 650px;
}
.new_account_details_status{
  background-color: #e9ecef;
  position: absolute;
  top: 900px;
    left: 286px;
    width: 1375px;
    text-align: center;

}
.new_account_details_button{
  position: absolute;
    top: 110px;
    left: 285px;
    /* background-color: #FFF4F4; */
}
.new_account_items{
  margin-right: 10px;
}



  </style>
  <body>
    <div class="new_account_details_button">
        <!-- <button type="submit" class="btn btn-primary new_account_color"name="button"><a  href="new_account.php">New Customer</a></button> -->
<a class="btn btn-primary new_account_items no-print " href="new_account.php" role="button">New Customer</a>
<a class="btn btn-primary new_account_items no-print" href="new_services.php" role="button">New Services</a>
<button onclick="printContent()" class="btn btn-primary new_account_items no-print">Print</button>
      <!-- <a href="#" class="new_account_items">New sale</a> -->
    <!-- <button onClick="window.print()" class="btn btn-primary new_account_items">Print</button> -->
    </div>

        <table class=" table table-borderless table-striped table-earning" >
      <thead>
        <tr>
<th scope="col" colspan="2" >S.no</th>

              <th scope="col"colspan="2">Product_name</th>
            <!-- <th scope="col" colspan="2" >Product_code</th> -->

<th scope="col" colspan="2" >entry_time</th>
<th scope="col" colspan="2" >exit_time</th>
           <!-- <th scope="col"colspan="2">Phone</th> -->
          <!-- <th scope="col"colspan="2">purchase_price</th> -->
          <th scope="col"colspan="2">price</th>
           <!-- <th scope="col"colspan="2">Stock</th>
          <th scope="col"colspan="2">total_purchase_price</th>
          <th scope="col"colspan="2">total_sale_price</th>? -->
          <th scope="col"colspan="2">Action</th>
        </tr>
      </thead>
       <?php
      $query = "SELECT id,product_name,sales_price,entry_time FROM sales_details";
        // FETCHING DATA FROM DATABASE
        $result = mysqli_query($conn, $query);


            // OUTPUT DATA OF EACH ROW
    $cnt=1;
            while($row = mysqli_fetch_array($result)){
                $id=$row['id'];
       ?>
       <tr>
<td class="column-border  table-data "colspan="2"><?php echo $cnt; ?></td>

           <td class=" table-data"colspan="2"><?php echo $row['product_name']; ?></td>
  <td class=" table-data"colspan="2"> <?php echo $row['entry_time']; ?></td>
    <td class=" table-data" colspan="2"><button type="submit" class="btn btn-primary">Primary</button></td>
  <td class=" table-data"colspan="2"><?php echo $row['sales_price']; ?></td>
  <td class=" table-data"colspan="2"><a href="">Update |</a><a href=""> Ledger |</a><a href=""> Customer wise sales |</a><a href="delete_sales_detailsat.php"> Delete</a></td>
  <!-- <td class=" table-data"colspan="2"><a class="btn btn-primary new_account_items no-print " href="new_services.php" role="button">Done</a> </td> -->
  <!--?php
  <?php
 $cnt=$cnt+1;
 // }
  ?>
//   $sql = "SELECT exit_time FROM sales_details WHERE id='$id'";
//   // echo $sql;
//      $result1 = $conn->query($sql);
// echo $num_row = mysqli_num_rows($result1);
//      if ($result1->num_rows > 0) {
// echo "aaaaaaaaaaaaaaaaaaaaaa";
?>
<! <input type="button" name="done" id="done" value="saveeee"> -->
        <!-- <!?php   // echo "Exit time already recorded.";
         if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the current exit time
    $exitTime = date("Y-m-d H:i:s");

    // Insert the exit time into the database
    $sql = "INSERT INTO sales_details (exit_time) VALUES ('$exitTime')";
     } else {?>
         <! // Display the submit button if exit time is not recorded
         // echo '<form method="post" action="save_exit_time.php">'; -->
         <!-- <form class=""  method="post"> -->


        <!-- <td class=" table-data"colspan="2"><a class="btn btn-primary new_account_items no-print " role="button">Done</a> </td> -->

</form>
  <!--?php
     }

  ?>

            <! <td class=" table-data"colspan="2"> <//?php echo $row['exit_time']; ?></td> -->
         <!-- <td class=" table-data"colspan="2"> <//?php echo $row['product_code']; ?></td> -->

  <!-- <td class=" table-data"colspan="2"><//?php echo $row['purchase_price']; ?></td> -->


      <!-- <td class=" table-data"colspan="2"><//?php echo $row['stock']; ?></td> -->
      <!-- <//?php
     // Query to fetch the purchase data
     $sql = "SELECT product_name, purchase_price,sale_price FROM product_details";

     $result = $conn->query($sql);

     // Check if there are any results
     <! if ($result->num_rows > 0) {
         $total_purchase_price  = 0;
           $total_sales_price=0; -->

         <!-- // Iterate through the rows and calculate the total purchase price -->
         <!-- while ($row2 = $result->fetch_assoc()) {
             $total_purchase_price += $row2["purchase_price"];
             $total_sales_price += $row2["sale_price"]; -->
      <?php } ?>
         <!-- // while ($row2 = $result->fetch_assoc()) {
         //
         // }
         // Display the total purchase price
         // echo "Total Purchase Price: " . $totalPrice;
     // } else {
     //     echo "No purchases found.";
      } -->

     <!-- // Close the database connection
     //$conn->close();
     ?> -->
        <!-- <td class=" table-data"colspan="2"><//?php echo $total_purchase_price; ?></td>
          <td class=" table-data"colspan="2"><//?php echo $total_sales_price; ?></td> -->
         <!-- <td class=" table-data"colspan="2"><a href="">Update |</a><a href=""> Ledger |</a><a href=""> Customer wise sales</a></td> -->
</tr>


         <!-- <td class=" table-data"colspan="2"><//?php echo $row['balance']; ?></td> -->

          <!-- </table>
          <table class="new_account_details_status">
            <thead>
              <tr>

                  <th scope="col" colspan="1" >No of Receivables  </th>
                  <th scope="col" colspan="1" >Amount</th>
                  <th scope="col" colspan="1" >No of Payables  </th>
                  <th scope="col" colspan="1" >Amount</th>
              </tr>
              </thead>
            <tr>
              <td><//?php echo $positive_count ; ?></td>
              <td><//?php echo $total_positive_balance; ?></td>
              <td><//?php echo $negative_count ;?></td>
              <td><//?php echo $total_negative_balance; ?></td>
            </tr>
          </table> -->



  </body>
</html>
