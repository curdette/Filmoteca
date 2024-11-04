<?php
$servername = "localhost";
$username = "root";
$dbname = "movie";

// Créer la connexion
$connexion = new mysqli($servername, $username,"", $dbname);
?>
<html> 
    <head> <title> La liste des films</title> 
    <link rel="stylesheet" href="Liste_film_css.css" type="text/css" />
    </head>
    <body>
    <article>
    <h1> Voici nos films </h1> 
<?php 
$info_film = "SELECT * FROM info_movie";
$result = $connexion->query($info_film);
while($row = $result->fetch_assoc()){
    ?><article class ="information_films">
    <?php
    echo "<h3>Nom de film</h3> " . $row["titrefilm"] . " " . $row["year"] . "<br>" . $row["synopsis"] . "<br> " . $row["directeur"] . "<br> " . $row["genre"] . "<br>";
    ?></article>
<?php
}
?>

<?php ?>
</article></body>
</html>
