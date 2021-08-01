<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>We Talk Art</title>
	<link rel="stylesheet" href="cssres.css">
</head>
<body>
<div class="main_container" id="home">
	<div class="navbar">
		<div class="logo">
			<a href="#">We Talk Art.</a>
		</div>
		<div class="navbar_items">
			<ul>
                <li><a href="advert.html">Publish</a></li>
                <li><a href="advpanel.php">Operations</a></li>
				<li><a href="customerslogout.php">Log Out</a></li>
			</ul>
		</div>
	</div>
	<div class="banner_image">
    <div class="table_responsive">
      <form action="" method="POST">
      <?php
include "db.php";
$sql = "SELECT * FROM messages";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table >";
        echo "<thead>";
            echo "<tr>";
                echo "<th>Message Id</th>";
                echo "<th>Message Sender</th>";
                echo "<th>Message Subject</th>";
                echo "<th>Message Comment</th>";
            echo "</tr>";
            echo "</thead>";
        while($row = mysqli_fetch_array($result)){
            echo "<tbody>";    
            echo "<tr>";
                echo "<td>" . $row['Message_Id'] . "</td>";
                echo "<td>" . $row['Sender'] . "</td>";
                echo "<td>" . $row['Subject'] . "</td>";
                echo "<td>" . $row['Comment'] . "</td>";?>
           <?php echo "</tr>";
            echo "</tbody>"; 
        } 
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
// Close connection
mysqli_close($conn);
?>
    </div>
  </form>
	</div>
	<div class="services" id="services">
		<h1 class="title">My Art, My Fell</h1>
		<p>Art is a diverse range of human activities involving creative imagination to express technical proficiency, beauty, emotional power, or conceptual ideas. There is no generally agreed definition of what constitutes art, and ideas have changed over time.</p>
	</div>

	<div class="footer">
		<a href="#">© 219000369&nbsp;&&nbsp;218006750</a>
	</div>
	<div class="arrow">
		<a href="#home"><img src="images/arrow.png" alt="up_arrow"></a>
	</div>
</div>	
</body>
</html>