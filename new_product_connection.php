<?php
error_reporting(0);
include 'connection.php';

if (isset($_POST['submit'])) {

  $product_code = $_POST['product_code'];
  $product_name=$_POST['product_name'];
  // echo $address;
   $purchase_price = $_POST['purchase_price'];
// $balance=$_POST['balance'];
$sale_price=$_POST['sale_price'];
$stock=$_POST['stock'];
// $time=$_POST['time'];

  $sql = "INSERT INTO product_details (product_code,product_name,purchase_price,sale_price,stock) VALUES ('$product_code','$product_name','$purchase_price','$sale_price','$stock')";
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
