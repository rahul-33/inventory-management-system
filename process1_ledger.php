<?php
include('connection.php');
// include("sidenav.php");
 ?>
 <?php
 // Retrieve transaction data from the form
 $date = $_POST['date'];
 $description = $_POST['description'];
 $docType = $_POST['doc_type'];
 $creditDebit = $_POST['credit_debit'];
 $amount = $_POST['amount'];

 // Determine credit or debit based on the selection
 if ($creditDebit === 'credit') {
     $credit = $amount;
     $debit = 0;
     // echo $credit;
 } else {
     $credit = 0;
     $debit = $amount;
 }

 // Insert transaction into the purchase_ledger table
 $query = "INSERT INTO sales_ledger (date, description, doc_type, credit, debit, balance)
           VALUES ('$date', '$description', '$docType', $credit, $debit, 0)";
 $result = $conn->query($query);

 if ($result === true) {
     echo "Transaction added successfully.";
 } else {
     echo "Error: " . $query . "<br>" . $conn->error;
 }

 // Close the database connection
 $conn->close();
