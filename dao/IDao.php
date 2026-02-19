<?php
interface IDao {
    // Créer Objet
  function create($o);
    // Supprimer Objet
  function delete($o);
    // Modifier Objet
  function update($o);
    // Trouver Tous 
  function findAll();
   // Trouver par Id
  function findById($id);
}

