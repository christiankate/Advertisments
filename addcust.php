<?php
include "db.php";
$nam=$_POST["Names"];
$user=$_POST["Username"];
$pas=$_POST["Password"];
$sq=mysqli_query($conn,"INSERT INTO customers values(Null,'$nam','$user','$pas')");
if($sq)
{
    echo"<script>alert('Succesful Created, You can now Log In')</script>";
    echo"<script>location.href='index.html'</script>";
}
else{
    echo"Not inserted".mysqli_error($conn); 
}
//$conn->close();
?>
