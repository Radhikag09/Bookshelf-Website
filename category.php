<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookshelf";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// header("refresh:1");
   include('session.php');



$sql = "SELECT * FROM details WHERE email='$login_session'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $name=$row["name"];
    $d=$row["diag"];
  }
} else {
  echo "0 results";
}
$db->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> Bookshelf </title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<style>
 body{
 background-color:#faebd7;
 }
 header{
 text-align:center;
 }
 main{
 margin-top:100px;
 line-height:200%;
 }
 footer{
 text-align:right;
 margin-top:100px;
 }
</style>
</head>
<body>
<header>
 <h1>BOOK CATEGORIES</h1>
    <a href="logout.php" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-mini" style="float:right">Logout</a>

</header>
<main>
 <ul>
 <a href="code.php"><li>Adventure and Fantasy</li></a>
 <a href="teaser.php"><li>Brain Teasers</li></a>
 <a href="novel.php"><li>Novels</li></a>
 <a href="phy.php"><li>Psychology</li></a>
 </ul>
</main>
<footer>
 <img src="https://iheartcraftythings.com/wp-content/uploads/2021/09/6-129.jpg"
width="200px" height="200px"/>
</footer>
</body>
</html>