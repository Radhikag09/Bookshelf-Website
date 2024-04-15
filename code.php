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
 <title>Adventure and Fantasy</title>
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
 <h1>ADVENTURE and FANTASY</h1>
     <a href="logout.php" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-mini" style="float:right">Logout</a>
&nbsp;&nbsp;
&nbsp;

     <a href="category.php" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-mini" style="float:right">Category</a><br>

 <hr>
 </header>
 <main>
 <section>
 <h2>Harry Potter and The Philosopher's Stone</h2>
 <h3 class="aut">Author-J.K.Rowling</h3>
 <img src="https://m.media-amazon.com/images/I/5165He67NEL.jpg"
width="275px" height="250px">
 <p class="aut">Adaptation of the first of J.K. Rowling's popular
children's novels about Harry Potter,
a boy who learns on his eleventh birthday that he is the orphaned son of two
powerful wizards and possesses unique magical powers of his own.
He is summoned from his life as an unwanted child to become a student at
Hogwarts, an English boarding school for wizards. There, he meets several
 friends who become his closest allies and help him discover the truth about his
parents' mysterious deaths.</p>
 <hr>
 </section>
 <section>
 <h2>The House of Strange Stories</h2>
 <h3 class="aut">Author-Ruskin Bond</h3>
 <img src="https://m.media-amazon.com/images/I/71Mf4H6rrcL.jpg"
width="275px" height="250px">
 <p class="aut">‘The morgue had no electricity, just a kerosene lamp… I
had not been sitting there for long when the lamp…went out,
 and something moved very softly and quietly past me… Something cold and icy
touched one of my hands and felt its way up towards my neck and throat.
It was behind me, then it was before me. Then it was over me. I was in the arms
of the corpse!’
With The House of Strange Stories, celebrated writer Ruskin Bond brings forth a
collection of some of the most blood-curdling tales ever written.
Featuring Stacy Marie Belloc Lowndes’ ‘The Lodger’, Arthur Conan Doyle’s ‘The
Red-Headed League’, Wilkie Collins’ ‘The Duel’, Bram Stoker’s ‘The Sqaw’,
Edgar Allan Poe’s ‘The Cask of Amontillado’, and several of Bond’s own, these
tales of macabre, suspense, vampires, and haunted houses will leave even horror
fans terrified.</p>
 <hr>
 </section>
 <section>
 <h2>The Valley of Flowers</h2>
 <h3 class="aut">Author-Frank Smythe</h3>
 <img src="https://m.media-amazon.com/images/I/71NxdS8+pfL.jpg"
width="275px" height="250px">
 <p class="aut">‘The predominant note was peace; not the faintest breeze
ruffled the herbage and the
 silence was the silence of a vast ocean utterly calm, though always the sounds
of the streams came to the ear as a soft, almost imperceptible cadence.’
In 1931, a party of British mountaineers—including Frank S. Smythe—on their way
back from a successful ascent of Mount Kamet,
 were looking for shelter from inclement weather in the wilderness above
Joshimath in present-day Uttarakhand when they came upon the lush and colourful
Bhyundar Valley, the Valley of Flowers.
 In the monsoon of 1937, Smythe returned to the Valley with four Tibetans from
Darjeeling—his climbing partners and factotums—provisions, and six weeks of
leisure. On this adventure, Smythe extensively explored
the Valley, identifying and collecting flowers and seeds from among the wealth
of plant life. He and his friends also scaled the Nilgiri Parbat and the Mana
Peak and were defeated by Mount Rataban. Beset by the rains,
 the party was nearly always soggy and, once, an Abominable Snowman gave them
the fright of their lives. Yet, these were but minor prices to pay for the
privilege of witnessing the Himalaya in its infinite variety and for a great
deal
of time usefully spent ruminating on the joys of idleness.
The very best kind of nature and adventure writing, which vividly captures the
exuberance of wide open vistas as well as the opportunities for solitude and
introspection they provide, The Valley of Flowers is a book to read, and to keep
dipping into.</p>
 </section>
 </main>
 </body>
</html>