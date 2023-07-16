<?php
error_reporting(0);
include 'connection.php';

if (isset($_POST['submit'])) {

  // $product_code = $_POST['product_code'];
  $product_name=$_POST['product_name'];
  // echo $address;
   // $purchase_price = $_POST['purchase_price'];
// $balance=$_POST['balance'];
$sales_price=$_POST['sales_price'];
// $stock=$_POST['stock'];
// $time=$_POST['time'];

  $sql = "INSERT INTO sales_details (product_name,sales_price) VALUES ('$product_name','$sales_price')";
   echo $sql;

  $data=mysqli_query($conn,$sql);

  if ($data) {
     // echo "insert";
  }else
  {
     echo "sorry";
  }
}
?>
