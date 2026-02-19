<?php


class Connexion {
    
    // Objet PDO
  private PDO $connexion;

  public function __construct() {
    $host = 'localhost'; // Serveur
    $dbname = 'school10'; // Nom de la BD
    $login = 'root'; // Login
    $password = ''; // Mot de passe         

    try {
      $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
      $this->connexion = new PDO($dsn, $login, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      ]);
    } catch (Exception $e) {
      die('Erreur Connexion BD : ' . $e->getMessage());
    }
  }
  
  // Récuperation du PDO
  public function getConnexion(): PDO {
    return $this->connexion;
  }
}