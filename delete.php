<?php
include_once 'db.php';
$sql = "DELETE FROM orders WHERE Order_Id='" . $_GET["Order_Id"] . "'";
//$sq = "DELETE FROM favorites WHERE Order_Id='" . $_GET["Order_Id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Deleted Successfully!')</script>";
    echo "<script>window.open('advpanel.php','_self')</script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>