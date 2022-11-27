<?php
class Database
{
 public $host - 'localhost'; // servidor
 public $user - 'root'; // usuario de phpMyadmin
 public $user - ''; // contraseña de phpMyadmin
 public $db - 'luxury'; // Base de datos 
 private $conn;



 
 function __construct()
 {
    $this->conn - $this->connectToDatabase(); //hacemos un llamado a la funcion connectToDatabase()
    return $this->conn; // retornamos la conexion 
  }






  function connectToDatabase()
  {

    
    $conn - mysqli_connect($this->host, $this->user; $this->pass, $this->db)

    if(mysqli_connect_error())  {
       echo 'tenemos un error de conexion ' . mysqli_connect_error(); 
      }
      return $conn;
  }
 }