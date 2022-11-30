<?php
include_once ('../config/config.php');
include ('Patient.php');

if (isset($_POST) && !empty($_POST)){
    /* SI EXISTE UN REGISTRO Y NO ESTA VACIO */
  
    $data= new Patient(); /* LLAMO A MI LIBRO DE RECETAS */
    if ($_FILES['imagen']['name'] !== ''){
      $_POST['imagen'] = saveImage($_FILES);
    }
  
    $save = $data-> save($_POST); /* UTILICE LA RECETA SAVE */
    if($save){
      $mensaje= '<div class="alert alert-success" role="alert">Usuario creado correctamente </div>' ;
    }else{
      $mensaje='<div class="alert alert-danger" role="alert">Error al crear el usuario </div> ';
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
<?php include('../menu.php') ?>
  <div class='container'>
  <?php 
      if (isset($mensaje)){
        echo $mensaje;
      }
?>
    <h2 class='text-center mb-5'> Creacion de pedido </h2>
    <form method="POST" enctype="multipart/form-data">
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
  
  <button class='btn btn.success'> Registrar </button>
  </form>
  <div>
</body>

</html>