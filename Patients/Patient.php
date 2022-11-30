<?php
  include('../config/config.php');
  include('../config/Database.php');

  class Patient{
    public $conn;

    function __construct(){
      $db= new Database(); /* LA CONEXION A LA BD SIEMPRE SE RENUEVE O ESTE EN LINEA */
      $this->conexion = $db->connectToDatabase();
  }

     function save($sparams){
        $nombredequienrecibe = $sparams['nombredequienrecibe'];
        $numerodequienrecibe	 = $sparams['numerodequienrecibe'];
        $direccion = $sparams['direccion']; 
        $fechadeentrega = $sparams['fechadeentrega'];
        $horadeentrega = $sparams['horadeentrega'];
        $nombredequienenvia = $sparams['nombredequienenvia'];
        $mensaje = $sparams['mensaje'];
        $imagen = $sparams['imagen'];

        $insert = " INSERT INTO pedidos VALUES (NULL, '$nombredequienrecibe', '$numerodequienrecibe','$direccion', '$fechadeentrega', '$horadeentrega', '$nombredequienenvia', '$mensaje', '$imagen') ";
        return mysqli_query($this->conn, $insert);
      }

     

    /*    function getALL(){
        $sql = "SELECT * FROM pedidos ";
        return mysqli_query($this->conn, $sql);
    
    } */
       function getOne($id){
        $sql = "SELECT * FROM pedidos WHERE id = $id";
        return mysqli_query($this ->conn, $sql);
       }

       function update($params){
        $nombredequienrecibe = $sparams['nombredequienrecibe'];
        $numerodequienrecibe	 = $sparams['numerodequienrecibe'];
        $direccion = $sparams['dirección']; 
        $fechadeentrega = $sparams['fechadeentrega'];
        $horadeentrega = $sparams['horadeentrega'];
        $nombredequienenvia = $sparams['nombredequienenvia'];
        $mensaje = $sparams['mensaje'];
        $imagen = $sparams['imagen'];

        $update = "UPDATE pedidos SET nombredequienrecibe='$nombredequienrecibe' ,  $numerodequienrecibe='$numerodequienrecibe', direccion='$direccion',  fechadeentrega='$fechadeentrega', horadeentrega='$horadeentrega', nombredequienenvia='$nombredequienenvia', mensaje='$mensaje' , imagen ='$imagen' WHERE id = $id";
                return mysqli_query($this->conn, $update);
      }

      function remove($id){
        $remove - "DELETE FROM pedidos WHERE id = $id";
        return mysqli_query($this->conn, $remove);
       }
   }