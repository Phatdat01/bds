<html>
<meta http-equiv="Content-Type"'.' content="text/html; charset=utf8"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<body>
<?php
session_start();
	if(isset($_POST['ac'])){
		$servername = "localhost";
		$username = "root";
		$password = "";

		$conn = new mysqli($servername, $username, $password);

		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$sql = "USE Real_Estate";
		$conn->query($sql);

		$sql = "SELECT * FROM Real_Estate WHERE ID = '".$_POST['ac']."'";
		$result = $conn->query($sql);
	}

	if(isset($_POST['delc'])){
		$servername = "localhost";
		$username = "root";
		$password = "";

		$conn = new mysqli($servername, $username, $password);

		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "USE Real_Estate";
		$conn->query($sql);
	}

	$servername = "localhost";
	$username = "root";
	$password = "";

	$conn = new mysqli($servername, $username, $password);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "USE Real_Estate";
	$conn->query($sql);	

	$sql = "SELECT * FROM Real_Estate";
	$result = $conn->query($sql);
?>	

<?php
if(isset($_SESSION['id'])){
	echo '<header>';
	echo '<blockquote>';
	echo '<a href="index.php"><img src="image/icon.png"></a>';
	echo '<form class="hf" action="logout.php"><input class="hi" type="submit" name="submitButton" value="Logout"></form>';
	echo '<form class="hf" action="edituser.php"><input class="hi" type="submit" name="submitButton" value="Edit Profile"></form>';
	echo '</blockquote>';
	echo '</header>';
}

if(!isset($_SESSION['id'])){
	echo '<header>';
	echo '<blockquote>';
	echo '<a href="index.php"><img src="image/icon.png"></a>';
	echo '<form class="hf" action="Register.php"><input class="hi" type="submit" name="submitButton" value="Register"></form>';
	echo '<form class="hf" action="login.php"><input class="hi" type="submit" name="submitButton" value="Login"></form>';
	echo '</blockquote>';
	echo '</header>';
}
echo '<blockquote>';
	echo "<table id='myTable' style='width:80%; float:left'>";
	echo "<tr>";
    while($row = $result->fetch_assoc()) {
		$price = $row["Price"];
		if ($price >= 1000000000) {
			$price = $price/1000000000 . " tỉ";
		} elseif ($price > 1000000) {
			$price = $price/1000000 . " tr";
		}

	    echo "<td>";
	    echo "<table>";
	   	echo '<tr><td width="200px">'.'<img src="'.$row["Image"].'"width="100%" height="300ph">'.'</td></tr><tr><td style="padding: 5px; font-weight: bold;">'.$row["Title"].'</td></tr><tr><td style="padding: 5px;">Author: '.$row["Author"].'</td></tr><tr><td style="padding: 5px;">Area: '.$row["Area"].' m&sup2</td></tr><tr><td style="padding: 5px;">Price: '.$price.'</td></tr><tr><td style="padding: 5px;">
	   	<form action="" method="post">
	   	<input type="hidden" value="'.$row['ID'].'" name="ac"/>';
	   	// <input class="button" type="submit" value="Add to Cart"/>
	   	echo '</form></td></tr>';
	   	echo "</table>"; 
	   	echo "</td>";
    }
    echo "</tr>";
    echo "</table>";
	echo '</blockquote>';
?>
</body>
</html>