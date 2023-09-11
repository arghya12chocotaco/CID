<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sist";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = "CREATE TABLE inventory (
name VARCHAR(30) ,
regno INT(10),
)";

/*if ($conn->query($sql) === TRUE) {
  echo "Table inventory created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}*/




//get the data from html file
$name=$_POST["name"];
$regno=$_POST["regno"];




//insert data into database
$sql = "INSERT INTO inventory(name , regno)
VALUES ('$name', '$regno')";
echo "'<br>'Data inserted sucessfully '<br>'";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
