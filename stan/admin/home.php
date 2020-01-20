<?php 
include('session.php');
include('database.php');
 

$result=mysqli_query($con, "select * from admin where username='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>



<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>

<header>

<div class="all">
	
		<img src="doctor.jpg"> 
		
<div class="reminder">
    <p><a href="logout.php">Log out </a></p>
  </div>
  </div>
<style>
   
   .all img{

width: 150px;

}

table {
border-collapse: collapse;
width: 60%;
color: #588c7e;
font-family: monospace;
font-size: 20px;
text-align: center;
position : absolute;  
top: 8px;
right: 70px;
}
th {
background-color: #588c7e;
color: white;
}

</style>
</header>
</head>
<body>
<table>

<tr>
<th>guestname</th>
<th>guestemail</th>
<th>guestelephone</th>
<th>adults</th>
<th>children</th>
<th>checkin</th>
<th>checkout</th>
<th>comments</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "blacks");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM guest";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["guestname"]. "</td><td>" . $row["guestemail"] . "</td><td>". $row["guestelephone"] . "</td><td>". $row["adults"] . "</td><td>". $row["children"] . "</td><td>". $row["checkin"]. "</td><td>". $row["checkout"]. "</td><td>". $row["comments"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

</body>
</html>