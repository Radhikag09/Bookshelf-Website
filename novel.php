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
 <title>Novels</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
 <h1>NOVELS</h1>
      <a href="logout.php" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-mini" style="float:right">Logout</a>
&nbsp;&nbsp;
&nbsp;

     <a href="category.php" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-mini" style="float:right">Category</a><br>

 <hr>
 </header>
 <main>
 <section>
 <h2>And The Mountains Echoed</h2>
 <h3 class="aut">Author-Khaled Hosseini</h3>
 <img src="https://orderondoor.com/wp-content/uploads/2021/12/5-3.png"
width="275px" height="250px">
 <p class="aut">The novel by Khaled Hosseini, And the Mountains Echoed,
is a work of family dramahistorical
 fiction that examines the factors surrounding one the factors that lead to and
reverberate from one action: a poor
family sells their youngest daughter to a wealthy couple in Kabul. Set in
Afghanistan, the novel spans over fifty 50 years and four generations.
Hosseini includes several narrative voices, rather than just the story’s main
family. The multiple narrators provide several different angles into
 the grand narrative of the main family, but they also examine their own context
and the motives behind their choices in their life. The reader will
 notice many similarities between the “unconnected” narrators to the main
characters—the members of the family part of the grand narrative.</p>
 <hr>
 </section>
 <section>
 <h2>The Fault In Our Stars</h2>
 <h3 class="aut">Author-John Green</h3>
 <img src="https://m.media-amazon.com/images/I/817tHNcyAgL.jpg"
width="275px" height="250px">
 <p class="aut">Hazel Grace Lancaster has been living with cancer for
three of her seventeen years of life. Despite this, she is a girl with a
 vibrant mind, biting wit, and incredible empathy for the position into which
she puts her parents of having to care for her. Her cancer began as thyroid
cancer but spread to her lungs, causing her to need to breathe oxygen from a
tank at all times throughout the day. She attends a support group at a church;
there, she meets a friend named Isaac and a romantic interest named Augustus.
Augustus has been in remission after losing his leg some years prior, so Hazel
hesitates in starting a relationship with him, not wanting to hurt him if her
illness takes another turn for the worse. She introduces Augustus to her
favorite book,
 and he forms a plan in which they will travel to Amsterdam together (using the
"Wish" given to him by a foundation for children with cancer) to meet the
reclusive
 and mysterious author and find out what happens after the book's end. They are
able to take this trip, but when they arrive to meet the author he is drunk and
surly.
 At the end of the trip, Augustus reveals to Hazel that his cancer has come back
and is much worse than the previous time. They return home and Hazel stays by
his side
 until his death. The author attends Augustus's funeral and tries to apologize
to Hazel; she realizes that his book, which is about a young girl with cancer,
was based
 on his daughter who died. Hazel copes with Augustus's death, comforting herself
with the strength of her family and a letter about her that Augustus sent to the
author
before his death.</p>
 <hr>
 </section>
 <section>
 <h2>The Kite Runner</h2>
 <h3 class="aut">Author-Khaled Hosseini</h3>
 <img src="https://m.media-amazon.com/images/I/81IzbD2IiIL.jpg"
width="275px" height="250px">
 <p class="aut">The Kite Runner easily divides into three main sections:
Amir's childhood in Kabul; Amir and Baba's years in Fremont, California; and
finally,
 Amir's return to Kabul. The plot covers multiple betrayals and offers the
possibility of redemption – though by no means is redemption assured. We'll
spend a little
more time on the first section since it really sets the rest of the book in
motion. It's like the Big Bang – the rest of The Kite Runner's universe takes
shape around
the early events of the novel.</p>
 </section>
 </main>
 </body>
 </html>