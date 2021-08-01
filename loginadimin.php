<?php      
    include"db.php";  
    $username = $_POST['Usernames'];  
    $password = $_POST['Passwords'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from users where Usernames = '$username' and Passwords = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
    echo"<h1>WELCOME ".$_POST['Username']."</h1>";
    echo"<a href='dashboard.html'>Product</a>";
}
else
{
    if($_POST['Username']===$username&&$_POST['Password']===$password){
        $_SESSION['Username']=$username;
        echo
            "<script>location.href='loginadimin.php'</script>";
    }
    else{
        echo"<script>alert('username or password incorrect')</script>";
        echo"<script>location.href='loginadimin.html'</script>";
    }
}
?>