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
<html>
 <head>
 <title>Psychology</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <meta charset="utf-8" />
 <style>
 p{
 text-align:justify;
 }
 body{
 background-color:#fdf5e6;
 }
 header{
 text-align:center;
 }
 .aut{
 margin-left:30px;
 }
 section{
 text-align:center;
 }
 </style>
 </head>
 <body>
 <header>
 <h1>PSYCHOLOGY</h1>
      <a href="logout.php" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-mini" style="float:right">Logout</a>
&nbsp;&nbsp;
&nbsp;

     <a href="category.php" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-mini" style="float:right">Category</a><br>

 <hr>
 </header>
 <main>
 <section>
 <h2>Ikigai</h2>
 <h3 class="aut">Author-Francesc Miralles
 Hector Garcia</h3>
 <img
src="https://cdn.shopify.com/s/files/1/1163/9680/products/61170_1024x1024.jpg?v=
1536585232" width="275px" height="250px">
 <p class="aut">The Ikigai book introduces you to various topics related
to the art of living,
such as the blue zones, longevity, logotherapy, flow, yoga, tai chi, and
resilience. It defines what
 Ikigai is and its rules. The book says that living a long and full life is
under your control to an extent.
Your habits and life choices can make a significant difference from an early
age.
The authors of this book conducted 100 interviews in Ogimi, Okinawa (the world’s
longest-living
 community) to gain an in-depth understanding of the longevity secrets of
centenarians and supercentenarians.
Each chapter delivers a well-researched account of Okinawans’ lifestyle,
attitude, mindset, diet, and routine.
 The authors argue that your Ikigai keeps your body fighting and living longer.
</p>
 <hr>
 </section>
 <section>
 <h2>Psychology Of Money</h2>
 <h3 class="aut">Author-Morgan Housel</h3>
 <img
src="https://www.ajayonlinestall.com/wp-content/uploads/2021/02/9789390166268.pn
g" width="275px" height="250px">
 <p class="aut">The Psychology of Money explores how money moves around
in an economy and how personal biases and the
 emotional factor play an important role in our financial decisions, as well as
how to think more rationally and make better
decisions when it comes to money.</p>
 <hr>
 </section>
 <section>
 <h2>The Silent Patient</h2>
 <h3 class="aut">Author-Alex Michaelides</h3>
 <img
src="http://cdn.shopify.com/s/files/1/0584/4667/6158/products/the-silent-patient
.jpg?v=1631297447" width="275px" height="250px">
 <p class="aut">The Silent Patient is a shocking psychological thriller
of a woman’s act of violence against her husband—and of the therapist
 obsessed with uncovering her motive.Alicia Berenson’s life is seemingly
perfect. A famous painter married to an in-demand fashion photographer, she
lives in a grand house with big windows overlooking a park in one of London’s
most desirable areas. One evening her husband Gabriel returns home late
 from a fashion shoot, and Alicia shoots him five times in the face, and then
never speaks another word.Alicia’s refusal to talk, or give any kind of
explanation, turns a domestic tragedy into something far grander, a mystery that
captures the public imagination and casts Alicia into notoriety.
The price of her art skyrockets, and she, the silent patient, is hidden away
from the tabloids and spotlight at the Grove, a secure forensic unit in North
London.
Theo Faber is a criminal psychotherapist who has waited a long time for the
opportunity to work with Alicia. His determination to get her to talk and
unravel
the mystery of why she shot her husband takes him down a twisting path into his
own motivations—a search for the truth that threatens to consume him....</p>
 </section>
 </main>
 </body>
</html>