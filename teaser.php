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
 <title>Brain Teasers</title>
 <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
 <meta charset="utf-8"/>
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
 <h1>BRAIN TEASERS</h1>
       <a href="logout.php" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-mini" style="float:right">Logout</a>
&nbsp;&nbsp;
&nbsp;

     <a href="category.php" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-mini" style="float:right">Category</a><br>

 <hr>
 </header>
 <main>
 <section>
 <h2>The Mindfullness Puzzle Book</h2>
 <h3 class="aut">Author-Dr. Gareth Moore</h3>
 <img
src="https://images-na.ssl-images-amazon.com/images/I/6136W-JTQqL.SS700.jpg"
width="275px" height="250px">
 <p class="aut">A collection of restful puzzles and brain-training
activities, designed to relieve stress and inspire creativity.
 Feel the tension release as you focus on each achievable and fun task,
and experience the endorphin reward buzz as you successfully
complete the puzzles.</p>
 <hr>
 </section>
 <section>
 <h2>The Practising Mind</h2>
 <h3 class="aut">Author-Thomas M.Strener</h3>
 <img src="https://m.media-amazon.com/images/I/71DiBFzhI3L.jpg"
width="275px" height="250px">
 <p class="aut">The Practicing Mind shows you how to cultivate patience,
focus, and discipline for working
towards your biggest goals, by going back to the basic principles of practice,
embracing a child-like trial-and-error
 attitude again and thus make working hard towards mastery a fulfilling process
in itself.</p>
 <hr>
 </section>
 <section>
 <h2>Unmind</h2>
 <h3 class="aut">Author-Siddharth Tripathi</h3>
 <img src="https://m.media-amazon.com/images/I/818L45Nm8cL.jpg"
width="275px" height="250px">
 <p class="aut">All human pursuit is born out of a longing for
happiness.
Yet, this feeling is universally elusive and when attained, it is ephemeral. Why
is it so hard to find happiness?
 Is there a way to make it last? If Sri Ramana Maharshi was asked this question,
he would say, “Yes, there is a way.
But to get there you must first find out who you really are.” Ramana Maharshi
(1879-1950) and Ramesh Balsekar (1917-2009)
 are two of the greatest mystics of modern India.
They taught non-duality (or advaita) as a way to Self-realization.
 Their teachings didn’t advocate a complex practice or a long path to
enlightenment, instead, they simply pointed out that we needed
 a correct understanding of our identity in order to be happy. unMind is a pure,
succinct graphical retelling of some of the most powerful
 spiritual teachings that have emerged from India in the last century.
</p>
 </section>
 </main>
 </body>
</html>
 