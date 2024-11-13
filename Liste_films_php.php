<?php
$servername = "localhost";
$username = "root";
$dbname = "movie";

// Créer la connexion
$connexion = new mysqli($servername, $username, "", $dbname);
?>
<html> 
<head> 
    <title> La liste des films</title> 
    <link rel="stylesheet" href="Liste_film_css.css" type="text/css" />
</head>

<body>
<header> Voici les page disponible : 
    <table id = "navigation_bar"> 
        <tr>
            <td> Home page </td>
            <td> Movie list</td>
            <td> CRUD</td>
            <td> Notation</td>
        </tr>
    </table>
</header>
    <article>
        <h1> Voici nos films </h1> 
        <article class="informations_films">
            <table>
                <tr> 
                    <td class="cellule_interne">Titre</td>
                    <td class="cellule_interne">Année</td>
                    <td class="cellule_interne">Synopsis</td>
                </tr>
                <?php 
                $info_film = "SELECT * FROM info_movie";
                $result = $connexion->query($info_film);
                
                    while ($row = $result->fetch_assoc()) {
                        $titrefilm = $row["titrefilm"];
                        $year = $row["year"];
                        $synopsis = $row["synopsis"]; 
                ?>
                    <tr>
                        <td class="cellule_interne"><?php echo $titrefilm; ?> </td>
                        <td class="cellule_interne"><?php echo $year; ?> </td>
                        <td class="cellule_interne"><?php echo $synopsis; ?> </td>
                    </tr>
                <?php
                    }
                ?>
            </table>
        </article>
    </article>
</body>
<footer>  </footer>
</html>


