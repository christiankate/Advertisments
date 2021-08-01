<?php

include('db.php');
if (isset($_POST['submit']))
{
$id=$_POST['Order_Id'];
$pi=mysqli_real_escape_string($conn, $_POST['ProductImage']);
$pn=mysqli_real_escape_string($conn, $_POST['ProductName']);
$pc=mysqli_real_escape_string($conn, $_POST['ProductCategory']);

mysqli_query($conn,"UPDATE orders SET ProductImage='$pi', ProductName='$pn',ProductCategory='$pc' WHERE Order_Id='$id'");

header("Location:advpanel.php");
}

if (isset($_GET['Order_Id']) && is_numeric($_GET['Order_Id']) && $_GET['Order_Id'] > 0)
{
$id = $_GET['Order_Id'];
$result = mysqli_query($conn,"SELECT * FROM orders WHERE Order_Id=".$_GET['Order_Id']);

$row = mysqli_fetch_array($result);
if($row)
{
$id = $row['Order_Id'];
$pi = $row['ProductImage'];
$pn = $row['ProductName'];
$pc = $row['ProductCategory'];
}
else
{
echo "No results!";
}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Edit Item</title>
</head>
<body>



<form method="post" action="update.php">
<input type="hidden" name="Order_Id" value="<?php echo $id; ?>"/>
<table border="0">
<tr>
<th colspan="2" bgcolor="skyblue"><b>Edit Records </b></th>
</tr>
<tr  bgcolor="darkgrey">
<td width="179" ><b>Product Image<font color="red"><em>*</em></font></b></td>
<td><label>
<input type="file" name="ProductImage" value="<?php echo $pi; ?>"  />
</label></td>
</tr>
<tr  bgcolor="darkgrey">
<td width="179"><b>Product Name<font color="red"><em>*</em></font></b></td>
<td><label>
<input type="text" name="ProductName" value="<?php echo $pn ?>" />
</label></td>
</tr>

<tr  bgcolor="darkgrey">
<td width="179"><b>Product Category<font color="red"><em>*</em></font></b></td>
<td><label>
<input type="text" name="ProductCategory" value="<?php echo $pc ?>" />
</label></td>
</tr>
<tr align="Right"  bgcolor="darkgrey">
<td colspan="2"><label>
<input type="submit" name="submit" value="Save Changes">&nbsp; <button><a href="advpanel.php" style="text-decoration: none;">Cancel</a></button> 
</label></td>
</tr>
</table>
</form>
</body>
</html>