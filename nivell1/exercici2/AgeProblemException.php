<?php
//Nivell 2 Exercici 1
class AgeProblemException extends Exception
{
  public function __construct(string $message, int $age)
  {
    $message .= "You are a minor, your age is : {$age}.";
    parent::__construct($message);
  }
}
