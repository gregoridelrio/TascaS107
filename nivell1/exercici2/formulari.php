<?php
session_start();

try {
  $nom = $_POST['nom'];
  $edat = $_POST['edat'];

  if (empty($nom)) {
    throw new Exception("El nom no pot estar buit");
  }

  if (empty($edat)) {
    throw new Exception("La edat no pot estar buida.");
  }

  if (!is_numeric($edat)) {
    throw new Exception("L'edat ha de ser un numero.");
  }

  $_SESSION['nom'] = $nom;
  $_SESSION['edat'] = $edat;

  echo "El teu nom es " . $nom . " i tens " . $edat . " anys<br>";

  echo "Variables de sessió: " . $_SESSION['nom'] . " " . $_SESSION['edat'] . " anys";
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
  exit();
}
