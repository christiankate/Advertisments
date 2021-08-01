<?php
include "db.php";
$im=$_POST["ProductImage"];
$pn=$_POST["ProductName"];
$pc=$_POST["ProductCategory"];
$sq=mysqli_query($conn,"INSERT INTO orders values(Null,'$im','$pn','$pc')");
if($sq)
{
    echo "<script>alert('Published Successfully!')</script>";
    echo "<script>window.open('advert.html','_self')</script>";
}
else{
    echo"Not inserted".mysqli_error($conn); 
}
//$conn->close();
?>
