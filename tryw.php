<!DOCTYPE html>
<html>
<head><title>Welcome</title>
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
?>

<?php
$sql = "SELECT t.number, t.headlines FROM head AS t ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
}
?>

<script>

var count=0;
 

function Count() {
    count=count+1;
   
var txt = document.getElementById('txt');
txt.setAttribute("style","font-size: 20px; font-family: Arial; font-weight:bold; ");
     document.getElementById('txt').innerHTML = " Number of Clicks: " + count; 


}


</script>
</head>
<center>
<body>
<style>
h1 {color: lightblue;
background-color: lightblue;
font-family: verdana;
font-size: 70x;}
h2 {
    color: red;
    text-align: center;
    font-family: verdana;
    font-size: 55px;
    margin-top: 0.8em;
    margin-bottom: 0;
}
h3 {color: lightblue; background-color: lightblue;font-family: verdana;font-size: 30px;}
p{color: Black;
font-weight:bold;
font-family: arial;
font-size: 20px;}
input[type=submit]{
    background-color: #3B5998;
    font-weight:bold;
    border: none;
    color: white;
    text-align: center;
    font-family: verdana;
    font-size: 40px;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 30px;
}
</style>
<h1> "" </h1>
<?php echo '<h2>' .$headlines = $row['headlines'].'</h2>'."<br>"; ?>
<h3> "" </h3>
<form action="one.php" method="get "target="_blank">
 <input type="submit" value= <?php echo $number = $row['number']; ?> onclick="Count()">
<p> Initial Values of Headline and Button: <?php echo $headlines = $row['headlines']." ".$number = $row['number']; ?> </p>
<p> Visit Time: <?php date_default_timezone_set("America/Chicago");
 echo date("h:i:sa");?> </p>
<div id="txt"></div>
</center>




</body>
</html>


<?php
$conn->close();
?>









  









