<?php 
class FilmRepository{
    private $dsn = 'mysql:dbname=testdb;host=127.0.0.1';
    private $user = 'dbuser';
    private $password = 'dbpass';
    private $dbh;

    // Constructeur : établit la connexion à la base de données
    public function __construct() {
            $this->dbh = new PDO($this->dsn, $this->user, $this->password);
    }

    // Méthode pour récupérer les données
    public function getInfoFilms() {
        $sql = 'SELECT* FROM films';
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