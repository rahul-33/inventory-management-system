<?php
include('connection.php');
include("sidenav.php");
 ?>
 <?php
// Count positive balances
$sql_positive = "SELECT COUNT(*) AS positive_count FROM cust_details WHERE balance > 0";
$result_positive = $conn->query($sql_positive);
$row_positive = $result_positive->fetch_assoc();
$positive_count = $row_positive["positive_count"];

// Count negative balances
$sql_negative = "SELECT COUNT(*) AS negative_count FROM cust_details WHERE balance < 0";
$result_negative = $conn->query($sql_negative);
$row_negative = $result_negative->fetch_assoc();
$negative_count = $row_negative["negative_count"];
?>
<?php
// Calculate total positive balance
$sql_positive = "SELECT SUM(balance) AS total_positive_balance FROM cust_details WHERE balance > 0";
$result_positive = $conn->query($sql_positive);
$row_positive = $result_positive->fetch_assoc();
$total_positive_balance = $row_positive["total_positive_balance"];

// Calculate total negative balance
$sql_negative = "SELECT SUM(balance) AS total_negative_balance FROM cust_details WHERE balance < 0";
$result_negative = $conn->query($sql_negative);
$row_negative = $result_negative->fetch_assoc();
$total_negative_balance = $row_negative["total_negative_balance"];
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
    <div class="new_account_details_button">
        <!-- <button type="submit" class="btn btn-primary new_account_color"name="button"><a  href="new_account.php">New Customer</a></button> -->
<a class="btn btn-primary new_account_items no-print " href="new_account.php" role="button">New Customer</a>
<a class="btn btn-primary new_account_items no-print" href="" role="button">New sale</a>
<button onclick="printContent()" class="btn btn-primary new_account_items no-print">Print</button>
      <!-- <a href="#" class="new_account_items">New sale</a> -->
    <!-- <button onClick="window.print()" class="btn btn-primary new_account_items">Print</button> -->
    </div>

        <table class=" table table-borderless table-striped table-earning" >
      <thead>
        <tr>
          <th scope="col" colspan="2" >S.no</th>
            <th scope="col" colspan="2" >id</th>
          <th scope="col"colspan="2">Name</th>
           <!-- <th scope="col"colspan="2">Phone</th> -->
          <th scope="col"colspan="2">Email</th>
          <th scope="col"colspan="2">Balance</th>
          <th scope="col"colspan="2">Action</th>
        </tr>
      </thead>
      <?php
      $query = "SELECT id,name,email,balance FROM cust_details";
        // FETCHING DATA FROM DATABASE
        $result = mysqli_query($conn, $query);


            // OUTPUT DATA OF EACH ROW
    $cnt=1;
            while($row = mysqli_fetch_array($result)){

       ?>
       <tr>
         <td class="column-border  table-data "colspan="2"><?php echo $cnt; ?></td>
         <td class=" table-data"colspan="2"> <?php echo $row['id']; ?></td>
         <td class=" table-data"colspan="2"> <?php echo $row['name']; ?></td>
  <td class=" table-data"colspan="2"><?php echo $row['email']; ?></td>
   <td class=" table-data"colspan="2"><?php echo $row['balance']; ?></td>
         <td class=" table-data"colspan="2"><a href="">Update |</a><a href=""> Ledger |</a><a href=""> Customer wise sales</a></td>
</tr>


         <!-- <td class=" table-data"colspan="2"><//?php echo $row['balance']; ?></td> -->
         <?php
         $cnt=$cnt+1;
         }
          ?>
          </table>
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
              <td><?php echo $positive_count ; ?></td>
              <td><?php echo $total_positive_balance; ?></td>
              <td><?php echo $negative_count ;?></td>
              <td><?php echo $total_negative_balance; ?></td>
            </tr>
          </table>



  </body>
</html>
