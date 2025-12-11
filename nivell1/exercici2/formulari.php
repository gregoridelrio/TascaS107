<?php
require_once 'AgeProblemException.php';
require_once 'NameProblemException.php';

session_start();

try {
  $name = $_POST['name'];
  $age = $_POST['age'];

  if (empty($name)) {
    throw new Exception("Input name can't be empty");
  }

  if (empty($age)) {
    throw new Exception("Input age can't be empty");
  }

  if (!is_numeric($age)) {
    throw new Exception("Age must be a number");
  }

  $_SESSION['name'] = $name;
  $_SESSION['age'] = $age;

  echo "Your name is " . $name . " and you are " . $age . " years old<br>";

  echo "Session variables: Your name is " . $_SESSION['name'] . " and you are " . $_SESSION['age'] . " years old";
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
  exit();
}
