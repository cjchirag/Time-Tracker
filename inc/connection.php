<?php
try {
  //Happy path
  //Trying to create an object from the PDO class to connect with the database.
  $db = new PDO("sqlite:".__DIR__."/database.db");

  // An attribute to tell the object that all errors will be handled as exceptions
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  //if there is a problem->Catch block
} catch (Exception $e) //Exception is caught and stored in the $e
{
  // To echo the error message
  echo $e->getMessage();
  // To stop any more code from executing with exit;
  exit;
}


 ?>
