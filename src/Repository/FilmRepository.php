<?php 
namespace Src\Repository;

use PDO;
use PDOException;
class FilmRepository{
    private $dsn = 'mysql:dbname=filmoteca;host=127.0.0.1';
    private $user = 'filmoteca_user';
    private $password = 'filmoteca_password';
    private $dbh;

    // Constructeur : établit la connexion à la base de données
    public function __construct() {
            $this->dbh = new PDO($this->dsn, $this->user, $this->password);
    }

    // Méthode pour récupérer les données
    public function getInfoFilms():array {
        $sql = 'SELECT* FROM film';
        $stmt = $this->dbh->query($sql); // Préparer et exécuter la requête

        // Parcourir les résultats
        $results = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $results[] = $row;
        }
        return $results;
    }
}
?>