<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Crear pedidos </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
<?php incluide('../menu.php') ?>
  <div class='container'>
  <?php 
     if (isset($error)){
        echo $error;
      }
    ?>
    <h2 class='text-center mb-5'> Creacion de pedido </h2>
    <form methof='POST' enctype='multipat/form-data'>
        <div class='row mb-2'>
          </div class='col'>
            <input type='text' name='firstName' id='firstName' placeholder='Nombre de quien recibe' requiere class='form-control'/>
        <div>
        </div class='col'>
            <input type='number' name='phone' id='phone' placeholder='Numero de quien recibe' requiere class='form-control'/>
        <div>

        <div class='row mb-2'>
        </div class='col'>
            <input type='direction' name='direction' id='direction' placeholder='Direccion   de quien recibe' requiere class='form-control'/>
        
        <div class='row mb-2'>
        </div class='col'>
            <input type='datetime-local' name='sessionDate' id='sessionDate' requiere class='form-control'/>
        <div>

        <div class='row mb-2'>
          </div class='col'>
            <input type='text' name='firstName' id='firstName' placeholder='Nombre de quien envia' requiere class='form-control'/>
        <div>
    
        <div class='row mb-2'>
        </div class='col'>
            <input type='diseases' name='diseases' id='diseases' placeholder='Mensaje'  requiere class='form-control'/>
        <div>

        <div class='row mb-2'>
        </div class='col'>
            <input type='file' name='image' id='image' requiere class='form-control'/>
        <div>       
  </div>  
  
  <button class='btn btn.success'> Registrar </button>
  </form>
  <div>
</body>

</html>