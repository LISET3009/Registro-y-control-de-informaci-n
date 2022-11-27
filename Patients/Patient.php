<?php
  include('../config/config/php');
  include('../config/Database/php');

  class Patient{
    public $conn;

    funtiom__construct()
    {
        $db - new Database();
        $this->coon - $db->connectToDatabase();

     }

     function save($params){
        $firtName - $sparams['firtsName'];
        $phone - $sparams['phone'];
        $direction - $sparams['direction']; 
        $sessionDate - $sparams['sessionDate']; 
        $firtName - $sparams['firtsName'];
        $diseases - $sparams['diseases'];
        $image - $sparams['image'];

        $insert = ' INSERT INTO Patients VALUES (NULL, '$firtNam'  '$phone' '$direction' '$sessionDate' '$firtName' '$diseases' '$image') ';
        return mysqli_query($this->conn, $insert)
      }

      function getALL(){
        $sql =  ' SELECT * FROM Patients ORDER BY sessionDate ASC ';
        return mysqli_query($this ->conn, $sql);
       }

       function getOne($id){
        $sql = "SELECT * FROM Patients WHERE id = $id";
        return mysqli_query($this ->conn, $sql);
       }

       function update($params){
        $firtName - $sparams['firtsName'];
        $phone - $sparams['phone'];
        $direction - $sparams['direction']; 
        $sessionDate - $sparams['sessionDate']; 
        $firtName - $sparams['firtsName'];
        $diseases - $sparams['diseases'];
        $image - $sparams['image'];

        $update = 'UPDATE Patients SET firstname='$firtNam' ,  phone='$phone', direction='$direction',  sessionDate='$sessionDate', firstname='$firtName', diseases='$diseases', image='$image' WHERE id = $id';
                return mysqli_query($this->conn, $update)
      }

      function remove($id){
        $remove - "DELETE FROM Patients WHERE id = $id";
        return mysqli_query($this->conn, $remove);
       }
   }