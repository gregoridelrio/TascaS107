<?php
//Nivell 2 Exercici 1
class NameProblemException extends Exception
{
  public function __construct(string $message, string $name)
  {
    $message .= "Your name must have more than one letter : {$name}.";
    parent::__construct($message);
  }
}
