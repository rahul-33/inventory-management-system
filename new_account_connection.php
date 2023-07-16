<?php
error_reporting(0);
include 'connection.php';

if (isset($_POST['submit'])) {

  $username = $_POST['name'];
  $address=$_POST['address'];
  // echo $address;
   $email = $_POST['email'];
$balance=$_POST['balance'];

  $sql = "INSERT INTO cust_details (name,address,email,balance) VALUES ('$username','$address','$email','$balance')";
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
