<?php
include('connection.php');
include("sidenav.php");
 ?>
 <?php
// Query to fetch the purchase data
// $sql = "SELECT product_name, purchase_price,sale_price FROM product_details";
//
// $result = $conn->query($sql);
//
// Check if there are any results


// Close the database connection
//$conn->close();
?>


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
    <!-- <div class="new_account_details_button">
        < <button type="submit" class="btn btn-primary new_account_color"name="button"><a  href="new_account.php">New Customer</a></button> -->
<!-- <a class="btn btn-primary new_account_items no-print " href="new_account.php" role="button">New Customer</a>
<a class="btn btn-primary new_account_items no-print" href="new_product.php" role="button">New sale</a>
<button onclick="printContent()" class="btn btn-primary new_account_items no-print">Print</button>
      <!-- <a href="#" class="new_account_items">New sale</a> -->
    <!-- <button onClick="window.print()" class="btn btn-primary new_account_items">Print</button> -->
    <!-- </div> -->
    <div class="new_account_details_button">
        <!-- <button type="submit" class="btn btn-primary new_account_color"name="button"><a  href="new_account.php">New Customer</a></button> -->
  <a class="btn btn-primary new_account_items no-print " href="purchase_ledger.php" role="button">Create</a>
  <!-- <a class="btn btn-primary new_account_items no-print" href="new_product.php" role="button">New sale</a> -->
  <button onclick="printContent()" class="btn btn-primary new_account_items no-print">Print</button>
      <!-- <a href="#" class="new_account_items">New sale</a> -->
    <!-- <button onClick="window.print()" class="btn btn-primary new_account_items">Print</button> -->
    </div>
        <table class=" table table-borderless table-striped table-earning" >
      <thead>
        <tr>
<th scope="col" colspan="2" >S.no</th>
<th scope="col" colspan="2" >Document Number</th>

            <!-- <th scope="col" colspan="2" >time</th> -->
              <!-- <th scope="col"colspan="2">Doc Number</th> -->
            <!-- <th scope="col" colspan="2" >Product_code</th> -->

           <!-- <th scope="col"colspan="2">Phone</th> -->
          <!-- <th scope="col"colspan="2">purchase_price</th> -->
          <th scope="col"colspan="2">Date</th>
          <th scope="col"colspan="2">Description</th>
          <th scope="col"colspan="2">Document Type</th>
          <th scope="col"colspan="2">Credit/Debit</th>
          <th scope="col"colspan="2">Amount</th>
            <!-- <th scope="col"colspan="2">Profit</th> -->

        </tr>
      </thead>
       <?php
       $query = "SELECT * FROM purchase_ledger ORDER BY date";
       $result = $conn->query($query);
       $cnt=1;
       if ($result->num_rows > 0) {
           while ($row = $result->fetch_assoc()) {


       ?>
       <tr>
<td class="column-border  table-data "colspan="2"><?php echo $cnt; ?></td>
         <td class=" table-data"colspan="2"> <?php echo $row['id']; ?></td>
           <td class=" table-data"colspan="2"><?php echo $row['date']; ?></td>
         <!-- <td class=" table-data"colspan="2"> <?php echo $row['product_code']; ?></td> -->

  <td class=" table-data"colspan="2"><?php echo $row['description']; ?></td>
    <td class=" table-data"colspan="2"><?php echo $row['doc_type']; ?></td>
      <td class=" table-data"colspan="2"><?php echo ($row['credit'] > 0 ? 'Credit' : 'Debit'); ?></td>
        <td class=" table-data"colspan="2"><?php echo ($row['credit'] > 0 ? $row['credit'] : $row['debit']); ?></td>
      <!-- <?php
      // $total_purchase_price=$row['purchase_price']* $row['stock'];
      // $total_sales_price=$row['sale_price']* $row['stock'];
      // $profit=$total_sales_price-$total_purchase_price;
      // $tax=$total_purchase_price*0.18;
       ?>

        <td class=" table-data"colspan="2"><//?php echo $total_purchase_price; ?></td>
          <td class=" table-data"colspan="2"><//?php echo $total_sales_price; ?></td>
          <td class=" table-data"colspan="2"><//?php echo $tax; ?></td>
          <td class=" table-data"colspan="2"><//?php echo $profit; ?></td>

         <!<td class=" table-data"colspan="1"><a href="">Update |</a><a href=""> Product wise sales</a></td> -->
</tr>


         <!-- <td class=" table-data"colspan="2"><//?php echo $row['balance']; ?></td> -->
          <?php
         $cnt=$cnt+1;
       }
         }
          ?>
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
