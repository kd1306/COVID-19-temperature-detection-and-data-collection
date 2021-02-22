<?php
//include"dbconn.php";

//for AWS RDS database
$servername = "rds-covid19.cgtgaqfkiucx.ap-south-1.rds.amazonaws.com";
$username = "admin";
$password = "Bijapur!!08";
$dbname = "dbname";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{echo "Connected to database";}


    $name = (isset($_POST['name']) ? $_POST['name'] : '');
    $age = (isset($_POST['age']) ? $_POST['age'] : '');
    $city = (isset($_POST['city']) ? $_POST['city'] : '');
    $address = (isset($_POST['address']) ? $_POST['address'] : '');
    $temperature = (isset($_POST['temperature']) ? $_POST['temperature'] : '');

$sql = $conn->prepare("INSERT INTO table1 (name,age,city,address,temperature) VALUES (?,?,?,?,?)");
$sql->bind_param("sissi", $name, $age,$city,$address,$temperature);
$result = $sql->execute();
if (!$result) {
	echo "Error inserting data";
	$sql->close();
} else {
	 echo "Data inserted successfully";
	 $sql->close();
 }

//  //for local database
//  $servername = "127.0.0.1:3325";
// $username = "root";
// $password = "";
// $dbname = "rds";
//  $con = mysqli_connect ($servername, $username, $password,$dbname); 
//  //get post records
//  $name=$_POST['name'];
//  $age=$_POST['age'];
//  $city=$_POST['city'];
//  $address=$_POST['address'];
//  $temperature=$_POST['temperature'];

//  //insert query
//  $sql = "INSERT INTO `table1`(`name`,`age`,`city`,`address`,`temperature`) VALUES('$name','$age','$city','$address','$temperature')";

//  //insert in database
//  $rs = mysqli_query($con, $sql);
//  if($rs)
//  	{echo "Records inserted";}
?>


