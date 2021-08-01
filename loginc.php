<?php
include "db.php";  
$username = $_POST['Username'];  

$client = "Visitor";
$admin ="Admin";
$check=0;
$test=0;
$sql = "SELECT * FROM customers WHERE Username  = '$username'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
$username = $_POST['Username'];
$password = $_POST['Password'];
$ty = $row['usertype'];
if($_POST['Username']===$username && $_POST['Password']===$password && $ty=='Visitor'){
    $check=1;
}
elseif($_POST['Username']===$username && $_POST['Password']===$password && $ty=='Admin'){
$test=1;
}
}}

session_start();
if($check==1){
    $_SESSION['Username'] = $username;
    echo "<script>location.href='customersorders.php'</script>";
}
elseif($test==1){
echo "<script>alert ('welcome Admin!')</script>";
    echo "<script>location.href='advpanel.php'</script>";
}
else{
    echo "<script>alert ('username or password incorrect!')</script>";
    echo "<script>location.href='index.html'</script>";
}


mysqli_close($conn);
?>