<html>
   
   <head>
      <title>Welcome</title>
   </head>
   
   <body>


<?php
$servername = "localhost";
$username = "chai";
$password = "unclesam!123";
$dbname = "headline";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT t.number, t.headlines FROM head AS t ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);


$conn->close();


date_default_timezone_set("America/Chicago");
echo "The time when clicked is " . date("h:i:sa");

  
?>

</body>

</html>