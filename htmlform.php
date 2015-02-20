<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <link rel="stylesheet"href="stle.css">
    <title>This is a title</title>
  </head>
  <body>
    <h1><?php echo "Some random bit that I came up with" ?></h1>

  <form action="savecomment.php" method="post">
  <label for="name">Name</label>
  <input type="text" id="name" name="vards">

<form action="savecomment.php" method="post">
  <label for="comment">Comment</label>
  <input type="textarea" id="comment" name="Komentaars">
<button type="submit">Continue</button>
</form>
  <a href="http://accessibility.psu.edu/imageshtml">Links</a>
  <IMG SRC="http://media.veryfunnypics.eu/2014/01/funny-pics-baby-mirror-your-hair-looks-funny.jpg"alt="Bilde">
  </img>
  <h2>Komentaari:</h2>
  <?php
  $mysqli=new mysqli("localhost","homestead","secret","bootcamp");
  $result = $mysqli->query("SELECT * FROM Comments");
  while ($row = $result->fetch_assoc()) {
    echo "Autors:" . $row['Author'];
    echo '<br>';
    echo "Komentaars:". $row['Text'];
    echo '<br>';
    echo '<br>';
  }
  ?>
  <script type="text/javascript" src="js/app.js">
  </script>
  </body>
</html>
