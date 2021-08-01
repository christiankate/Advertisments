<?php
include "db.php";
$ms=$_POST["Sender"];
$sb=$_POST["Subject"];
$cm=$_POST["Comment"];
$sq=mysqli_query($conn,"INSERT INTO messages values(Null,'$ms','$sb','$cm')");
if($sq)
{
    echo"<script>alert('Message Send')</script>";
    echo"<script>location.href='index.html'</script>";
}
else{
    echo"Not inserted".mysqli_error($conn); 
}
//$conn->close();
?>
