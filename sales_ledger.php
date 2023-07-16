<!-- ledger_form.php -->
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
    left: 200px;
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
    margin-top: 0px;
    margin-left: 250px;
}
.Create{
  width: 120px;
}
.new_account_heading{
  position: absolute;
    top: 20px;
    left: 20px;
}
.select{
  width: 150px;
    height: 35px;
}
}
  </style>
<body>
  <div class="account">


    <h2 class="new_account_heading">Enter Sales Ledger Transaction</h2>
    <form action="process1_ledger.php" method="post">
        <label class="new_account_name">Date:</label>
        <input class="new_account"type="date" name="date" required><br><br>
        <label class="new_account_name">Description:</label>
        <input class="new_account"type="text" name="description" required><br><br>
        <label class="new_account_name">Document Type:</label>
        <select class="select" name="doc_type" required>
            <option value="Invoice">Invoice</option>
            <option value="Receipt">Receipt</option>
            <option value="Expense">Expense</option>
        </select><br><br>
        <label class="new_account_name">Credit/Debit:</label>
        <select class="select" name="credit_debit" required>
            <option value="credit">Credit</option>
            <option value="debit">Debit</option>
        </select><br><br>
        <label class="new_account_name">Amount:</label>
        <input class="new_account"type="number" step="0.01" name="amount" required><br><br>
        <div class="new_account_buttons ">
            <input class="Create" type="submit" value="Submit">
            <a class="btn btn-primary " href="sales_view_ledger.php" role="button">Back_to-LIST</a>
        </div>

    </form>
      </div>
</body>
</html>
