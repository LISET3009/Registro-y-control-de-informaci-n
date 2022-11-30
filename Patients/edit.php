<?php
include('../config/config.php');
include('Patient.php');
$p = new Patient ();
$data = mysqli_fetch_object($p->getone($_GET['id']));
$date = new DateTime($data->fechadeentrega);

if(isset ($_POST) && !empty($_POST)){
    $_POST['imagen'] = $data->imagen;
    if ($_FILES['imagen']['name'] !== ''){
      $_POST['imagen'] = saveImage($_FILES);
    }
     $update = $p->update($_POST);
     if($update){
        $error = '<div class="alert alert-success" role="alert"> Pedido modificado correctamente</div>';
    }else{ 
        $error = '<div class="alert alert-success" role="alert"> Error al modificar un pedido</div>';
 }
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
          </div class='col'>
            <input type='text' name='nombredequienrecibe' id='nombredequienrecibe' placeholder='Nombre de quien recibe' requiere class='form-control'/>
        <div>
        </div class='col'>
            <input type='number' name='numerodequienrecibe' id='numerodequienrecibe' placeholder='Numero de quien recibe' requiere class='form-control'/>
        <div>

        <div class='row mb-2'>
        </div class='col'>
            <input type='text' name='direccion' id='direccion' placeholder='Direccion   de quien recibe' requiere class='form-control'/>
        
        <div class='row mb-2'>
        </div class='col'>
            <input type='datetime-local' name='fechadeentrega' id='fechadeentrega' requiere class='form-control'/>
        <div>

        <div class='row mb-2'>
          </div class='col'>
            <input type='text' name='horadeentrega' id='horadeentrega' placeholder='Nombre de quien envia' requiere class='form-control'/>
        <div>
    
        <div class='row mb-2'>
        </div class='col'>
            <input type='text' name='nombredequienenvia' id='nombredequienenvia' placeholder='Mensaje'  requiere class='form-control'/>
        <div>

        <div class='row mb-2'>
        </div class='col'>
            <input type='text' name='mensaje' id='mensaje' requiere class='form-control'/>
        <div>      
        </div class='col'>
            <input type='file' name='imagen' id='imagen' requiere class='form-control'/>
        <div>      
  </div>  

    
 </div>
</body>

</html>