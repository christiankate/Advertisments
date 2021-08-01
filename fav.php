<?php
include_once 'db.php';
$sql = "INSERT INTO favorites values(null,'" . $_GET["Order_Id"] . "')";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Added To Liked Art')</script>";
    echo "<script>window.open('customersorders.php','_self')</script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>