<?php

class Etudiant {

  private ?int $id;      // Id de l'étudiant 
  private string $nom;   // Nom de l'étudiant
  private string $prenom; // Prénom de l'étudiant
  private string $ville;  // Ville de l'étudiant
  private string $sexe;   // Sexe de l'étudiant

  public function __construct($id = null, $nom = "", $prenom = "", $ville = "", $sexe = "") {
    $this->id = $id;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->ville = $ville;
    $this->sexe = $sexe;
  }

  // Retourne l'id
  public function getId(){ 
    return $this->id; 
  }

  // Retourne le nom
  public function getNom(){ 
    return $this->nom; 
  }

  // Retourne le prénom
  public function getPrenom(){ 
    return $this->prenom; 
  }

  // Retourne la ville
  public function getVille(){ 
    return $this->ville; 
  }

  // Retourne le sexe
  public function getSexe(){ 
    return $this->sexe; 
  }

  // Modifie l'id
  public function setId($id){ 
    $this->id = $id; 
  }

  // Modifie le nom
  public function setNom($nom){ 
    $this->nom = $nom; 
  }

  // Modifie le prénom
  public function setPrenom($prenom){ 
    $this->prenom = $prenom; 
  }

  // Modifie la ville
  public function setVille($ville){ 
    $this->ville = $ville; 
  }

  // Modifie le sexe
  public function setSexe($sexe){ 
    $this->sexe = $sexe; 
  }
  
  // Méthode toString
  public function __toString() {
    return $this->nom . " " . $this->prenom;
  }
}
