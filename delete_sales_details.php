<?php
include_once 'connection.php';
$sql = "DELETE FROM sales_details WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    header("Location:new_services.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
