<?php
include('../config/config.php');
include('Patient.php');
$p = new Patient ();
$data = mysqli_fetch_object($p->getone($_GET['id']));
$date = new DateTime($data->sessionDate);

if (isset($_POST) && !empty($_POST)){
    $_POST ['image'] = $data->image;
    if ($_FILES ['image']['name'] !-- ''){
        $_POST ['image'] = saveImge($_FILES);
     }
     $update = $p->update($_POST);
     if($update){
        $error = '<div class="alert alert-success" role="alert"> Pedido modificado correctamente</div>';
    }else{ 
        $error = '<div class="alert alert-success" role="alert"> Error al modificar un pedido</div>';
 }
?>
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
          <div class='col'>
            <input type='text' name='firstName' id='firstName' placeholder='Nombre de quien recibe' requiere class='form-control' value="<?= $data->firstName ?>" />
            <input type="hidden" name='id' id='id' value="<?= $data->id ?>" />
         </div>
        <div class='col'>
            <input type='number' name='phone' id='phone' placeholder='Numero de quien recibe' requiere class='form-control' value="<?= $data->phone ?>"/>
      </div>
    </div>

        <div class='row mb-2'>
        <div class='col'>
            <input type='direction' name='direction' id='direction' placeholder='Direccion   de quien recibe' requiere class='form-control' value="<?= $data->direction ?>"/>
         </div>
        <div class='row mb-2'>
        <div class='col'>
            <input type='datetime-local' name='sessionDate' id='sessionDate' requiere class='form-control'  value="<?= $data->format('Y-m-d\TH:i') ?>"/>
    </div>
    </div>
        <div class='row mb-2'>
          <div class='col'>
            <input type='text' name='firstName' id='firstName' placeholder='Nombre de quien envia' requiere class='form-control' value="<?= $data->firstName ?>"/>
    </div>
    </div>
    
        <div class='row mb-2'>
        <div class='col'>
            <input type='diseases' name='diseases' id='diseases' placeholder='Mensaje' requiere class='form-control' value="<?= $data->diseases ?> "/>
    </div>
    </div>
        <div class='row mb-2'>
        <div class='col'>
            <input type='file' name='image' id='image' requiere class='form-control'/>
        <div>       
  </div>  
  
  <button class='btn btn.success'> Modificar </button>
  </form>
 </div>
</body>

</html>