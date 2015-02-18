<?php

$mysqli=new mysqli("localhost","homestead","secret","bootcamp");
var_dump($_REQUEST);
$result = $mysqli->query("INSERT INTO Comments (Author,Text) VALUES('{$_REQUEST['vards']}','{$_REQUEST['Komentaars']}');");




 header('Location: /');
